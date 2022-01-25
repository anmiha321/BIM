<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\documents;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Cost;
use App\Models\Document;
use App\Models\Manager;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use File;
use Image;
class ProfileController extends Controller
{

    public function index()
    {
        return view('users.profile');
    }

    public function data_company()
    {
        return view('users.data-company');
    }

    public function fetchprofile()
    {
        $id = Auth::user()->getAuthIdentifier();
        $data = User::find($id);
        return response()->json([
            'user' => $data,

        ]);
    }

    public function fullinfo()
    {
        $id = Auth::user()->getAuthIdentifier();
        $data = User::find($id);
        return response()->json([
            'user' => $data,

        ]);
    }

    public function update(Request $request)
    {
        $id = Auth::user()->getAuthIdentifier();
        $validator = Validator::make($request->all(), [
            'surname' => ['max:255'],
            'name' => ['max:255'],
            'patronymic' => ['max:255'],
            'id_company' => ['max:255'],
            'country' => ['max:255'],
            'city' => ['max:255'],
            'position' => ['max:255'],
            'phone' => ['max:255', 'unique:users,phone,' . $id],
            'email_profile' => ['max:255', 'unique:users,email,' . $id],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {

            $user = User::find($id);
            $profile = Auth::user();
            $company = new Company;
            $companyid = User::find($id)->company;
            if ($profile) {
                $profile->surname = $request->input('surname', $user->surname);
                $profile->name = $request->input('name', $user->name);
                $profile->patronymic = $request->input('patronymic', $user->patronymic);
                $company->title = $request->input('id_company', $user->id_company);
                $profile->country = $request->input('country', $user->country);
                $profile->city = $request->input('city', $user->city);
                $profile->phone = $request->input('phone', $user->phone);
                $profile->email = $request->input('email_profile', $user->email);
                $credentials = array_filter($request->all());
                $user->update($credentials);
                if (empty($companyid)) {
                    $user->company()->save($company);
                } else {
                    $companyid->title = $request['id_company'];
                    $companyid->update();
                }
                return response()->json([
                    'status' => 200,
                    'message' => 'Worker Updated Successfully.'
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'No Worker were Found.'
                ]);
            }


        }
    }

    public function updatepasswordprofile(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => ['required', 'different:password'],
            'password' => ['required', 'min:8', 'same:password_confirmation_edit-password'],
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {

            $user = User::find($id);
            $profile = Auth::user();
            if (!Hash::check($request->input('old_password'), $user->password)) {
                return response()->json([
                    'status' => 400,
                    'errors' => 'The specified password does not match the database password',
                ]);
            } else {
                if ($profile) {
                    $user->password = $request->input('password');
                    if (!empty($user['password'])) {
                        $user['password'] = Hash::make($user['password']);
                    }
                    $user->update();
                    return response()->json([
                        'status' => 200,
                        'message' => 'Password Updated Successfully.'
                    ]);
                } else {
                    return response()->json([
                        'status' => 404,
                        'message' => 'No Worker were Found.'
                    ]);
                }

            }
        }
    }

    public function CreateAndUpdateCompany(Request $request)
    {
        $id = Auth::user()->getAuthIdentifier();
        $companyid = User::find($id)->company;
        if (empty($companyid->manager_id)) {
            $newmanagerid = new Manager();

            $newmanagerid->surname = $request['surname'];
            $newmanagerid->name = $request['name'];
            $newmanagerid->patronymic = $request['patronymic'];
            $newmanagerid->phone = $request['phone_dir'];
            $newmanagerid->email = $request['email_dir'];
            $newmanagerid->save();
            $managerid = Manager::latest()->first()->id;
            $manager = Manager::find($managerid);
            $companyid->manager()->associate($manager)->save();
        } else {
            $newmanagerid = Company::find($companyid->id)->manager;

            $newmanagerid->surname = $request['surname'];
            $newmanagerid->name = $request['name'];
            $newmanagerid->patronymic = $request['patronymic'];
            $newmanagerid->phone = $request['phone_dir'];
            $newmanagerid->email = $request['email_dir'];
//            $filter = array_filter($request->all());
            $newmanagerid->update();
        }
        $credentialcompany = array_filter($request->all());
        $companyid->ppppcccc = $request->input('ppppcccc');
        $companyid->kkkkcccc = $request->input('kkkkcccc');

        $request->validate([
            'phonecompany.*.phone' => 'required'
        ]);

        $companyphones = Company::find($companyid->id)->phones;
        if ($companyphones->isEmpty()) {
            foreach ($request->phonecompany as $phonename) {
                $item = Phone::firstOrNew($phonename);
                $item->save();
                $item->companies()->sync($companyid);
            }
        } else {
            foreach ($request->phoneid as $ids) {
                foreach ($ids as $id) {

                    foreach ($request->phonecompany as $key => $phonename) {

                        if ($request->input('phonecompany.' . $id . '.phone') != $request->input('phonecompanyreqvery.' . $id . '.input')) {
                            if ($key == $request->input('phoneid.' . $id . '.id')) {
                                $phone = Phone::with('companies')->find($request->input('phoneid.' . $id . '.id'));
                                $phone->phone = $request->input('phonecompany.' . $id . '.phone');
                                $phone->update();
                            }

                        }
                    }
                }
            }
        }

        foreach ($request->phonecompany as $phonename) {
            $item = Phone::firstOrNew($phonename);
            $item->save();
            $item->companies()->sync($companyid);
        }

        $companyid->update($credentialcompany);
        return response()->json([
            'status' => 200,
            'message' => 'Компания успешно создана!',
        ]);
    }

    public function fetchcompany()
    {
        $i = 0;
        $g = 0;
        $c = 0;
        $id = Auth::user()->getAuthIdentifier();
        $data = User::find($id)->company;
        $newmanagerid = Company::find($data->id)->manager;
        $every_mouth_costs =  Company::find($data->id)->costs->where('type_of_cost', 0);
        $every_mouth_ones =  Company::find($data->id)->costs->where('type_of_cost', 1);
        $output = '';
        $document = '';
        $rightdocuments = '';
        $worker_list = '';
        $costs_list = '';
        $costs_list_ones = '';
        $total_row = $data->count();
        if ($total_row > 0) {
            $output .= '<div class="company-main__main">
                          <div class="company-main__left">
                            <div class="company-main__checking block">
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">ИНН</p>
                                    <input data-num type="text" name="INN" id="" class="company-main__input form__input" value="' . $data->INN . '" placeholder="1234 5482 2266" maxlength="12">
                                </div>
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">БИК</p>
                                    <input data-num type="text" name="BIK" id="" class="company-main__input form__input" value="' . $data->BIK . '" placeholder="125 478 785" maxlength="9">
                                </div>
                                <div class="company-main__btn smtext">Проверить</div>
                            </div>
                            <div class="company-main__requisites block">
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">Юридический адрес</p>
                                    <input type="text" name="law_address" id="" class="company-name__input form__input" value="' . $data->law_address . '" placeholder="г. Тюмень ул. Тюменская 27" maxlength="50">
                                </div>
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">Почтовый адрес</p>
                                    <input type="text" name="mail_address" id="" class="company-name__input form__input" value="' . $data->mail_address . '" placeholder="г. Тюмень ул. Первомайская 3 оф.211" maxlength="50">
                                </div>
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">Фактический адрес</p>
                                    <input type="text" name="fact_address" id="" class="company-name__input form__input" value="' . $data->fact_address . '" placeholder="г. Тюмень ул. Первомайская 3 оф.211" maxlength="50">
                                </div>
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">КПП</p>
                                    <input data-num type="text" name="KPP" id="" class="company-name__input form__input" value="' . $data->KPP . '" placeholder="152752553" maxlength="9">
                                </div>
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">ОКПО</p>
                                    <input data-num type="text" name="OKPO" id="" class="company-name__input form__input" value="' . $data->OKPO . '" placeholder="4512538884" maxlength="10">
                                </div>
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">Система налогообложения</p>
                                    <div data-drop class="form__input-wrapper">
                                        <span data-drop-arr class="form__input-arr ic_arr_d"></span>
                                        <input data-aplha type="text" name="tax_system" id="" class="company-name__input form__input " value="' . $data->tax_system . '" placeholder="Упрощенная" maxlength="20" readonly>
                                    </div>
                                    <div data-drop-list class="drop">
                                        <p class="drop__item">Упрощенная</p>
                                        <p class="drop__item">Другая</p>
                                    </div>
                                </div>
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">ОГРН</p>
                                    <input data-num type="text" name="OGPH" id="" class="company-name__input form__input" value="' . $data->OGPH . '" placeholder="8546 996 631 663 " maxlength="13">
                                </div>
                                <div class="company-main__input-wrapper" id="phone_div">
                                    <p class="company-main__label smtext form__label">Телефон</p>
                                    <div id="imput_phone">
                                    ';
            foreach ($data->phones as $phonoe) {
                $output .= '<input type="hidden" style="color:red" name="phoneid[' . $phonoe->id . '][id]" id="phone_input_id" class="company-name__input form__input" value="' . $phonoe->id . '" placeholder="+ 7 (999) 999-99-99" maxlength="17">
                <input type="hidden" style="color:yellow"  name="phonecompanyreqvery[' . $phonoe->id . '][input]" id="phone_input" class="company-name__input form__input" value="' . $phonoe->phone . '" placeholder="+ 7 (999) 999-99-99" maxlength="17">
                <input type="hidden" style="color:blue"  name="count[' . $i++ . '][count]" id="phone_input" class="company-name__input form__input" value="' . $phonoe->phone . '" placeholder="+ 7 (999) 999-99-99" maxlength="17">
                <input type="tel" name="phonecompany[' . $phonoe->id . '][phone]" id="phone_input" class="company-name__input form__input" value="' . $phonoe->phone . '" placeholder="+ 7 (999) 999-99-99" maxlength="17">';
            }
            $output .= '
<input type="hidden" name="" id="count_inputs" class="" value="' . $i . '" placeholder="+ 7 (999) 999-99-99" maxlength="17">
</div>
                                    <p data-add-input id="add_phone" class="company-main__add-phone smtext">+ Добавить еще</p>
                                </div>
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">E-mail</p>
                                    <input type="email" name="email" id="" class="company-name__input form__input" value="' . $data->email . '" placeholder="example@gmail.com" maxlength="30">
                                </div>
                            </div>
                        </div>
                        <div class="company-main__director block">
                            <p class="company-main__heading text ic_m_lk">Руководитель</p>
                            <div class="company-main__input-wrapper">
                                <p class="company-main__label smtext form__label">Фамилия</p>
                                <input data-aplha type="text" name="surname" id="" class="form__input " value="' . $newmanagerid->surname . '" placeholder="Петров" maxlength="30">
                            </div>
                            <div class="company-main__input-wrapper">
                                <p class="company-main__label smtext form__label">Имя</p>
                                <input data-aplha type="text" name="name" id="" class="form__input " value="' . $newmanagerid->name . '" placeholder="Сергей" maxlength="30">
                            </div>
                            <div class="company-main__input-wrapper">
                                <p class="company-main__label smtext form__label">Отчество</p>
                                <input data-aplha type="text" name="patronymic" id="" class="form__input " value="' . $newmanagerid->patronymic . '" placeholder="Леонидович" maxlength="30">
                            </div>
                            <div class="company-main__input-wrapper">
                                <p class="company-main__label smtext form__label">Контактный телефон</p>
                                <input type="tel" name="phone_dir" id="" class="form__input" value="' . $newmanagerid->phone . '" placeholder="+7 (999) 999-99-99" maxlength="17">
                            </div>
                            <div class="company-main__input-wrapper">
                                <p class="company-main__label smtext form__label">E-mail</p>
                                <input type="email" name="email_dir" id="" class="form__input" value="' . $newmanagerid->email . '" placeholder="example@gmail.com" maxlength="30">
                            </div>
                        </div>
                        <div class="company-main__bank block">
                            <p class="company-main__heading company-main__heading_bank text ic_m_treat">Банковские реквизиты</p>
                            <div class="company-main__bank-row">
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">Наименование банка</p>
                                    <div data-drop class="form__input-wrapper">
                                        <span data-drop-arr class="form__input-arr ic_arr_d"></span>
                                        <input type="text" name="bank_name" id="" class="form__input" value="' . $data->bank_name . '" placeholder="ПАО “Сбербанк”" maxlength="30" readonly>
                                    </div>
                                    <div data-drop-list class="drop">
                                        <p class="drop__item">ПАО “Сбербанк”</p>
                                        <p class="drop__item">Другой банк</p>
                                    </div>
                                </div>
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">БИК</p>
                                    <input data-num type="text" name="bank_BIK" id="" class="form__input" value="' . $data->bank_BIK . '" placeholder="125 478 785" maxlength="9">
                                </div>
                            </div>
                            <div class="company-main__bank-row">
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">Р/С</p>
                                    <input data-num type="text" name="ppppcccc" id="" class="form__input" value="' . $data->ppppcccc . '" placeholder="08854731786216325794" maxlength="20">
                                </div>
                                <p class="company-main__balance text ic_m_econ">Баланс 12&nbsp;600&nbsp;&#8381;</p>
                            </div>
                            <div class="company-main__bank-row">
                                <div class="company-main__input-wrapper">
                                    <p class="company-main__label smtext form__label">К/С</p>
                                    <input data-num type="text" name="kkkkcccc" id="" class="form__input" value="' . $data->kkkkcccc . '" placeholder="856 479 115 782 437 167 42" maxlength="20">
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="lk-btns form__btns">
                       <button type="submit"  class="form__btn lk-btns__submit btn smtext">Сохранить</button>
                        <div data-reset class="form__cancel smtext cancel">Отменить</div>
                        </div>';
            $document .= '<div class="company-docs__head module__head">
                            <p class="module__heading ic_m_corr">Добавление нового документа</p>
                        </div>
                        <div class="company-docs__body block">
                            <p class="company-docs__label smtext">Название</p>
                            <div class="company-docs__row">
                                <div class="company-docs__main" id="file_inputs_list">
                                    <div class="company-docs__input-wrapper" >
                                        <input type="text" name="doc_name[0]" id="file_input_fild[0]" class="company-docs__input form__input" placeholder="Свидетельство о регистрации.pdf" maxlength="100">
                                       <label class="popup-add-doc__btn">
                        <input type="file" name="doc_file[0]" id="doc_file[0]" class="popup-add-doc__file">
                        Выбрать файл
                    </label>
                                        <button type="button" class="company-docs__del ic_close remove-input-field"></button>
                                    </div>
                                    <div id="submitbutton" class="company-docs__add smtext"><input type="submit" value="">Добавить в список</div>
                                </div>
                                <div id="file-list-display"></div>
                                <div class="company-docs__load  btngreen" id="add_new_imput">+ Загрузить другие документы</div>
                            </div>
                        </div>';
            $rightdocuments .= '<div class="module__head">
                            <p class="module__heading ic_m_corr">Список документов</p>
                        </div>
                        <div class="company-docs__list">';
            foreach ($data->documents as $documentval) {
                $rightdocuments .= '
                            <div class="company-docs__item">
                                <div class="company-docs__item-wrapper">
                                    <button type="button" id="deletefile" value="' . $documentval->id . '" class="company-docs__delete ic_close"></button>
                                    <a  href="' . asset('uploads/'.$data->id.'/' . $documentval->filename . '') . '" class="company-docs__name smtext" target="_blank">' . $documentval->title . '.' . $documentval->type . '</a>
                                </div>
                                <p class="company-docs__size smtext">' . documents::bytesToHuman($documentval->weight) . '</p>
                                <a href="' . url('/download_file', $documentval->filename) . '" class="company-docs__dload ic_dload"></a>
                            </div>
                        ';
            }
            $rightdocuments .= '</div>
<a href="' . url('/downloadArchive') . '" class="company-docs__dload-all smtext ic_dload">Скачать все одним архивом</a>
                        </div>';
            foreach ($data->workers as $worker) {
                $worker_list .= ' <div class="units-list__item">
                                    <button data-popup="info-unit" type="button" value="' . $worker->id . '" class="units-list__edit ic_edit"></button>
                                    <button type="button" value="' . $worker->id . '" class="units-list__arch ic_close"></button>
                                    <div class="units-list__photo"><img src="/uploads/units/'.$worker->image .'" alt="Пользователь" class="units-list__img"></div>
                                    <p class="units-list__name smtext">' . $worker->surname . ' ' . $worker->getNameInitials() . '. ' . $worker->getPatronymicInitials() . '. - ' . $worker->experience . ' - ' . $worker->getsalaryRight() . ' ₽</p>
                                </div>';
            }

            $costs_list .= '<div class="module__head">
                            <p class="module__heading ic_m_econ">Расходные статьи - 5</p>
                            <p class="module__icon ic_upload"></p>
                        </div>
                        <p class="company-expend__notify smtext">В месяц</p>
                        <div class="company-expend__main">
                            <div class="company-expend__list">';
            foreach ($every_mouth_costs as $cost) {
                $g++;
                $costs_list .= '<div class="company-expend__item">
                                    <p class="company-expend__text smtext">'.$g .'. '.$cost->title .'</p>
                                    <input type="text" name="rent_office" id="" value="'.$cost->sum_of_cost .'&#8381;" class="company-expend__input smtext" placeholder="300 000&#8381;">
                                    <button type="button" value="'.$cost->id .'" class="company-expend__del ic_close"></button>
                                </div>
                                ';
            }
            $costs_list .= ' <div class="company-expend__add ic_plus"><span data-popup="add-state" class="company-expend__add-text">Добавить новую статью расходов</span></div>
                            <p class="company-expend__sum smtext"><span class="company-expend__sum-span">Итого: </span>964 000&#8381;</p>
                            <input type="submit" value="Сохранить" class="company-expend__submit btn">
                            </div>
                        </div>';

            $costs_list_ones .= ' <div class="module__head">
                            <p class="module__heading ic_m_econ">Разовые расходы - 15</p>
                            <p class="module__icon ic_upload"></p>
                        </div>
                        <div class="company-expend__main">
                            <div class="company-expend__list">';
            foreach ($every_mouth_ones as $cost_ones) {
                $c++;
                $costs_list_ones .= '<div class="company-expend__item">
                                    <p class="company-expend__text smtext">'.$c .'. '.$cost_ones->title .'</p>
                                    <input type="text" name="buy_equip" id="" value="'.$cost_ones->sum_of_cost .'&#8381;" class="company-expend__input smtext" placeholder="300 000&#8381;">
                                    <button type="button" value="'.$cost_ones->id .'" class="company-expend__del ic_close"></button>
                                </div>';
            }
            $costs_list_ones .= '<div class="company-expend__add ic_plus"><span data-popup="add-every-mouth-state" class="company-expend__add-text">Добавить новую статью расходов</span></div>
                            <p class="company-expend__sum smtext"><span class="company-expend__sum-span">Итого: </span>964 000&#8381;</p>
                            <input type="submit" value="Сохранить" class="company-expend__submit btn">
                            </div>
                        </div>';
        } else {
            $output = 'Компания не найдена!';
        }
        $data = array(
            'company' => $output,
            'document' => $document,
            'rightdocuments' => $rightdocuments,
            'workers' => $worker_list,
            'costs' => $costs_list,
            'costs_ones' => $costs_list_ones,
        );
        echo json_encode($data);
    }

    public function addfile(Request $request)
    {
        $id = Auth::user()->getAuthIdentifier();
        $companyid = User::find($id)->company;

//        foreach ($request->doc_name as $value) {
//            foreach ($request->doc_file as $file) {
//                $weight = $file->getSize();
//                $filename = $value . '.' . $file->getClientOriginalExtension();
//                $type = $file->getClientOriginalExtension();
//                $file->move('uploads/documents', $filename);
//                $file = new Document;
//                $file->title = $value;
//                $file->filename = $filename;
//                $file->weight = $weight;
//                $file->type = $type;
//                $file->save();
//                $file->companies()->sync($companyid);
//            }
//
//        }


        $namerequest = $request->input('doc_name');
        $docs = $request->file('doc_file');

        for ($count = 0; $count < count($namerequest); $count++) {
            $title = $namerequest[$count];
            $file = $docs[$count];
            $filename = $title . '.' . $file->getClientOriginalExtension();
            $weight = $file->getSize();
            $type = $file->getClientOriginalExtension();
            $data = array(
                'title' => $title,
                'filename' => $filename,
                'weight' => $weight,
                'type' => $type,
            );
            $item = Document::create($data);
            $item->companies()->sync($companyid);
        }

        $path = public_path('uploads/'.$companyid->id.'');

        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }

        foreach (array_combine($namerequest, $docs) as $name => $doc) {
            $filename = $name . '.' . $doc->getClientOriginalExtension();
            $doc->move('uploads/'.$companyid->id.'',$filename);
        }

//        $item = Document::Create([
//            'title' => $value,
//            'filename' => $filename,
//            'weight' => $weight,
//            'type' => $type,
//        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Фаил успешно сохранен!',
        ]);
    }

    public function downloadfile(Request $request, $file)
    {
        $id = Auth::user()->getAuthIdentifier();
        $companyid = User::find($id)->company;
        return response()->download(public_path('uploads/'.$companyid->id.'/' . $file));
    }

    public function downloadarchive(Request $request)
    {
        $id = Auth::user()->getAuthIdentifier();
        $companyid = User::find($id)->company;
        $zip = new \ZipArchive();
        $fileName = 'Архив.zip';
        if ($zip->open(public_path($fileName), \ZipArchive::CREATE) == TRUE) {
            $files = File::files(public_path('uploads/'.$companyid->id.'/'));
            foreach ($files as $key => $value) {
                $relativeName = basename($value);
                $zip->addFile($value, $relativeName);
            }
            $zip->close();
        }

        return response()->download(public_path($fileName))->deleteFileAfterSend(true);
    }

    public function deletefile($id)
    {
        $ids = Auth::user()->getAuthIdentifier();
        $companyid = User::find($ids)->company;
        $document = Document::find($id);
        if ($document) {
            $path = (public_path('uploads/'.$companyid->id.'/' . $document->filename));

            if (File::exists($path)) {

                File::delete($path);
            }
            $document->delete();
            return response()->json([
                'status' => 200,
                'message' => 'document Deleted Successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No document was Found.'
            ]);
        }
    }
    public function create_worker(Request $request)
    {
        $id = Auth::user()->getAuthIdentifier();
        $companyid = User::find($id)->company;

        $validator = Validator::make($request->all(), [
            'image_worker' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:4096'],
            'surname_worker' => ['required', 'string', 'max:255'],
            'name_worker' => ['required', 'string', 'max:255'],
            'patronymic_worker' => ['required', 'string', 'max:255'],
            'email_worker' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password_worker' => ['required', 'string', 'max:255'],
            'phone_worker' => ['required', 'string', 'unique:users,phone'],
            'experience_worker' => ['required', 'string', 'max:255'],
            'salary_worker' => ['required', 'string'],
            'designed_sections' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {

            if ($request->hasFile('image_worker')) {
                $image = $request->file('image_worker');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(300, 300)->save(public_path('/uploads/units/' . $filename));

                $salary = $request['salary_worker'];
                function format_tel($salary)
                {
                    $f_salary = str_replace(' ', '', $salary); //Убираем пробелы
                    $f_salary = str_replace('руб', '', $f_salary);
                    return $f_salary;
                }
                $money = format_tel($salary);
                $item = User::create([
                    'image' => $filename,
                    'surname' => $request['surname_worker'],
                    'name' => $request['name_worker'],
                    'patronymic' => $request['patronymic_worker'],
                    'id_company' => $companyid->title,
                    'phone' => $request['phone_worker'],
                    'role' => $request->input('role_worker', '4'),
                    'experience' => $request['experience_worker'],
                    'salary' => $money,
                    'designed_sections' => $request['designed_sections'],
                    'password' => Hash::make($request['password_worker']),
                ]);
                $item->companies()->sync($companyid);
            }
            return response()->json([
                'status' => 200,
                'message' => 'Пользователь успешно создан!',
            ]);
        }
    }
}
