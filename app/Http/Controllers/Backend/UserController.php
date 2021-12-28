<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\User;
use Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
            $sorting = $request->get('sorting');
            $names = explode(" ", $query);
            if ($query != '') {
                $data = User::with('workgroup')->where('id', 'like', '%'.$query.'%')->
                orwhere('surname', 'like', '%'.$query.'%')->
                orwhere('name', 'like', '%'.$query.'%')->
                orwhere('patronymic', 'like', '%'.$query.'%')->
                orwhere('surname', 'like', $names)->
                orwhere('name', 'like', $names)->
                orwhere('patronymic', 'like', $names)->
                orderBy('id', 'ASC')->
                get();


            } else {
                $data = User::all();
            }

//            if ($query == 'active') {
//                $data = User::with('workgroup')->get();
//            } elseif ($query == 'archive') {
//                $data = User::with('workgroup')->onlyTrashed()->get();
//            } elseif ($query == 'name') {
//                $data = User::with('workgroup')->
//                orderBy('name', 'ASC')
//                    ->get();
//            } elseif ($query == 'data') {
//                $data = User::with('workgroup')->
//                orderBy('created_at', 'desc')
//                    ->get();
//            }
            $total_row = $data->count();

            if ($total_row > 0) {
                $id = Auth::user()->getAuthIdentifier();
                foreach ($data as $row) {
                    $output .= '<div class="sa__row">
                    <div class="sa__cell sa__cell_id"><p class="sa__text text">' . $row->id . '</p></div>
                    <div class="sa__cell sa__cell_photo"><div class="sa__photo"><img src="/uploads/units/' . $row->image . '" alt="Пользователь" class="sa__img"></div></div>
                    <div class="sa__cell sa__cell_fio"><p class="sa__text text">' . $row->surname . ' ' . $row->name . ' ' . $row->patronymic . '</p></div>
                    <div class="sa__cell sa__cell_status">
                        ' . ($row->deleted_at != Null ? '<p class="sa__text text ic_arr_d">Архивный</p>' : '<p class="sa__text text ic_arr_d">Активный</p>') . '
                        <div class="drop">
                            <p class="drop__item">Активный</p>
                            <p class="drop__item">Архивный</p>
                        </div>
                    </div>
                    <div class="sa__cell sa__cell_create"><p class="sa__text text">' . $row->created_at . '</p></div>
                    <div class="sa__cell sa__cell_inn"><p class="sa__text text">' . $row->INN . '<br> "' . $row->id_company . '"</p></div>
                    <div class="sa__cell sa__cell_login"><p class="sa__text text">' . $row->phone . '</p></div>
                    <div class="sa__cell sa__cell_test">
                    ' . ($row->acssess_as == 1 ? '<p class="sa__text text">Да</p>' : '<p class="sa__text text">Нет</p>') . '
                   </div>
                    <div class="sa__cell sa__cell_auth"><p class="sa__text text">0' . $row->last_seen . '</p></div>
                    <div class="sa__cell sa__cell_control"><p class="sa__text text ic_edit">Редактировать</p></div>
                    <div class="sa__cell sa__cell_ch-pass"><p class="sa__text text ic_lock">Изменить пароль</p></div>
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
}
