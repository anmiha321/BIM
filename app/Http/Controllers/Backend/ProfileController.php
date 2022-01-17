<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Manager;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        $phone = new Phone;
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

//                $newmanagerid->surname = $request['surname'];
//                $newmanagerid->name = $request['name'];
//                $newmanagerid->patronymic = $request['patronymic'];
//                $newmanagerid->phone =  $request['phone'];
//                $newmanagerid->email = $request['email'];
            $filter = array_filter($request->all());
            $newmanagerid->update($filter);
        }
        $credentialcompany = array_filter($request->all());
        $companyid->ppppcccc = $request->input('ppppcccc');
        $companyid->kkkkcccc = $request->input('kkkkcccc');

        $request->validate([
            'phonecompany.*.phone' => 'required',
        ]);
        $phoneinfo = Company::find($companyid->id)->phones;
        foreach ($phoneinfo as $phone)
            {

                foreach ($request->phonecompany as $value) {
                    foreach ($value as $imputval) {
                        foreach ($request->phoneid as $phoneid) {
                            if (empty($phone) | !empty($imputval)) {
//                                $phone = Phone::create($value);
//                                $phone->companies()->attach($companyid);
                                echo "<pre>Создать";
                            }
//                            else {
////                                $phoneinfo = Phone::find($phone->id);
////                                $filter = array_filter($value);
////                                $phoneinfo->update($filter);
//                                echo "<pre>Обновить";
//                            }
                        }
                    }
                }
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
        $b = 0;
        $id =
        $id = Auth::user()->getAuthIdentifier();
        $data = User::find($id)->company;
        $newmanagerid = Company::find($data->id)->manager;
        $output = '';
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
                $output .= '<input type="text" name="phoneid[' . $b++ . '][phoneidecach]" id="phone_input_id" class="company-name__input form__input" value="' . $phonoe->id . '" placeholder="+ 7 (999) 999-99-99" maxlength="17">
                <input type="tel" name="phonecompany[' . $i++ . '][phone]" id="phone_input" class="company-name__input form__input" value="' . $phonoe->phone . '" placeholder="+ 7 (999) 999-99-99" maxlength="17">';
            }
            $output .= '
<input type="text" name="" id="count_inputs" class="" value="' . $i . '" placeholder="+ 7 (999) 999-99-99" maxlength="17">
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
                                <input type="tel" name="phone" id="" class="form__input" value="' . $newmanagerid->phone . '" placeholder="+7 (999) 999-99-99" maxlength="17">
                            </div>
                            <div class="company-main__input-wrapper">
                                <p class="company-main__label smtext form__label">E-mail</p>
                                <input type="email" name="email" id="" class="form__input" value="' . $newmanagerid->email . '" placeholder="example@gmail.com" maxlength="30">
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
        } else {
            $output = 'Компания не найдена!';
        }
        $data = array(
            'company' => $output,
        );
        echo json_encode($data);
    }

}
