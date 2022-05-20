<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\User;
use Cache;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Image;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function newuser()
    {
        return view('users.new_user');
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            $telinn = $request->get('telinn');
            $sorting = $request->get('sorting');
            $names = explode(" ",$query);
            if ($query != '') {
                $data = User::where('id', 'like', '%' . $query . '%')->
                orwhere('surname', 'like', '%' . $query . '%')->
                orwhere('name', 'like', '%' . $query . '%')->
                orwhere('patronymic', 'like', '%' . $query . '%')->
                orwhere('surname', 'like', $names)->
                orwhere('name', 'like', $names)->
                orwhere('patronymic', 'like', $names)->
                orderBy('id', 'ASC')->
                get();


            }
            elseif($telinn != '')
            {
                $data = User::where('phone', 'like', '%' . $telinn . '%')->
                orwhere('INN', 'like', '%' . $telinn . '%')->
                orderBy('id', 'ASC')->
                get();
            }
            elseif($sorting == 'Активный')
            {
                $data = User::all();
            }
            elseif($sorting == 'Архивный')
            {
                $data = User::onlyTrashed()->get();
            }
            else
            {
                $data = User::all();
            }


            $total_row = $data->count();

            if ($total_row > 0) {
                foreach ($data as $row) {
                    $auth_id = Auth::user()->getAuthIdentifier();
                    $output .= '<div class="sa__row">
                    <div class="sa__cell sa__cell_id"><p class="sa__text text">' . $row->id . '</p></div>
                    <div class="sa__cell sa__cell_photo"><div class="sa__photo"><img src="/uploads/units/' . $row->image . '" alt="Пользователь" class="sa__img"></div></div>
                    <div class="sa__cell sa__cell_fio"><p class="sa__text text">' . $row->surname . ' ' . $row->name . ' ' . $row->patronymic . '</p></div>
                    <div class="sa__cell sa__cell_status">
                        ' . ($row->deleted_at != Null ? '<p data-status class="sa__text text ic_arr_d">Архивный</p>' : '<p data-status class="sa__text text ic_arr_d">Активный</p>') . '
                        <div data-status-drop class="drop-sa">
                            <button value="' . $row->id . '" id="activate" class="drop__item">Активный</button>
                            ' . ($row->id == $auth_id ? '' : ' <button value="' . $row->id . '" id="arhivate" class="drop__item">Архивный</button>') . '
                        </div>
                    </div>
                    <div class="sa__cell sa__cell_create"><p class="sa__text text">' . $row->created_at . '</p></div>
                    <div class="sa__cell sa__cell_inn"><p class="sa__text text">' . $row->INN . '<br> "' . $row->id_company . '"</p></div>
                    <div class="sa__cell sa__cell_login"><p class="sa__text text">' . $row->phone . '</p></div>
                    <div class="sa__cell sa__cell_test">
                    ' . ($row->acssess_as == 1 ? '<p class="sa__text text">Да</p>' : '<p class="sa__text text">Нет</p>') . '
                   </div>
                    <div class="sa__cell sa__cell_auth"> ' . ($row->last_seen == 0 ? '<p class="sa__text text">Не проявлял активности</p>' : '<p class="sa__text text">' . $row->last_seen . '</p>') . '</div>
                    <div data-popup="info-unit" class="sa__cell sa__cell_control"><button value="' . $row->id . '" id="edit_user" class="sa__text text ic_edit">Редактировать</button></div>
                    <div  data-popup="sa-ch-pass" class="sa__cell sa__cell_ch-pass"><button value="' . $row->id . '" id="edit_pass" class="sa__text text ic_lock">Изменить пароль</button></div>
                </div>
                ';
                }

            } else {
                $output = 'Пользователь не найден!';
            }

            $data = array(
                'users' => $output,
            );
            echo json_encode($data);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:4096'],
            'surname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'patronymic' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'INN' => ['required', 'numeric'],
            'phone' => ['required', 'string'],
            'role' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(300, 300)->save(public_path('/uploads/units/' . $filename));


                User::create([
                    'acssess_as' => $request->input('acssess_as', '0'),
                    'image' => $filename,
                    'surname' => $request['surname'],
                    'name' => $request['name'],
                    'patronymic' => $request['patronymic'],
                    'id_company' => $request['company'],
                    'INN' => $request['INN'],
                    'phone' => $request['phone'],
                    'role' => $request->input('role', '0'),
                ]);
            }
            return response()->json([
                'status' => 200,
                'message' => 'Пользователь успешно создан!',
            ]);
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json([
                'status' => 200,
                'user' => $user,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Пользователь не существует!',
            ]);
        }
    }

    public function updatepassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'min:8', 'same:password_confirmation'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $user = User::find($id);
            if ($user) {
                $user->password = Hash::make($request['password']);
                $user->update();
                return response()->json([
                    'status' => 200,
                    'message' => 'Пароль успешно обновлен!'
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Пользователь не найден.'
                ]);
            }


        }

    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'surname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'patronymic' => ['required', 'string', 'max:255'],
            'experience' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:users,phone,' . $id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {

            $user = User::find($id);
            if ($user) {

//                if ($request->hasFile('image')) {
//                    $path = (public_path('/uploads/images/' . $user->image));
//
//                    if (File::exists($path)) {
//
//                        File::delete($path);
//                    }
//                    $image = $request->file('image');
//                    $destinationPath = '/uploads/images/';
//                    $filename = time() . '.' . $image->getClientOriginalExtension();
//                    Image::make($image)->resize(300, 300)->save(public_path('/uploads/images/' . $filename));
//                    $profile = $destinationPath . $filename;
//                    $user->image = $filename;
//                }
                $user->surname = $request->input('surname');
                $user->name = $request->input('name');
                $user->patronymic = $request->input('patronymic');
                $user->email = $request->input('email');
                $user->phone = $request->input('phone');
                $user->experience = $request->input('experience');
                $user->update();
                return response()->json([
                    'status' => 200,
                    'message' => 'Пользователь обновлен успешно!'
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Пользователь не найден.'
                ]);
            }


        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Пользаватель успешно удален.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Пользователь не найден.'
            ]);
        }


    }

    public function restore($id)
    {
        $worker = User::onlyTrashed()->find($id);
        if ($worker) {
            $worker->restore();
            return response()->json([
                'status' => 200,
                'message' => 'Пользователь востановлен успешнно!'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Пользователь не найден.'
            ]);
        }
    }
    public function archive()
    {
        $data = User::onlyTrashed()->get();
        $output = '';
        $total_row = $data->count();

        if ($total_row > 0) {
            foreach ($data as $row) {
                $output .= '<div class="sa__row">
                    <div class="sa__cell sa__cell_id"><p class="sa__text text">' . $row->id . '</p></div>
                    <div class="sa__cell sa__cell_photo"><div class="sa__photo"><img src="/uploads/units/' . $row->image . '" alt="Пользователь" class="sa__img"></div></div>
                    <div class="sa__cell sa__cell_fio"><p class="sa__text text">' . $row->surname . ' ' . $row->name . ' ' . $row->patronymic . '</p></div>
                    <div class="sa__cell sa__cell_status">
                        ' . ($row->deleted_at != Null ? '<p data-status class="sa__text text ic_arr_d">Архивный</p>' : '<p data-status class="sa__text text ic_arr_d">Активный</p>') . '
                        <div data-status-drop class="drop-sa">
                            <button value="' . $row->id . '" id="activate" class="drop__item">Активный</button>
                            <button value="' . $row->id . '" id="arhivate" class="drop__item">Архивный</button>
                        </div>
                    </div>
                    <div class="sa__cell sa__cell_create"><p class="sa__text text">' . $row->created_at . '</p></div>
                    <div class="sa__cell sa__cell_inn"><p class="sa__text text">' . $row->INN . '<br> "' . $row->id_company . '"</p></div>
                    <div class="sa__cell sa__cell_login"><p class="sa__text text">' . $row->phone . '</p></div>
                    <div class="sa__cell sa__cell_test">
                    ' . ($row->acssess_as == 1 ? '<p class="sa__text text">Да</p>' : '<p class="sa__text text">Нет</p>') . '
                   </div>
                    <div class="sa__cell sa__cell_auth"> ' . ($row->last_seen == 0 ? '<p class="sa__text text">Не проявлял активности</p>' : '<p class="sa__text text">' . $row->last_seen . '</p>') . '</div>
                    <div data-popup="info-unit" class="sa__cell sa__cell_control"><button value="' . $row->id . '" id="edit_user" class="sa__text text ic_edit">Редактировать</button></div>
                    <div data-popup="sa-ch-pass"  class="sa__cell sa__cell_ch-pass"><button value="' . $row->id . '" id="edit_pass" class="sa__text text ic_lock">Изменить пароль</button></div>
                </div>
                ';
            }

        } else {
            $output = 'Пользователь не найден!';
        }

        $data = array(
            'users' => $output,
        );
        echo json_encode($data);
    }

}
