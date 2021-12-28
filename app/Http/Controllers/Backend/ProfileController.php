<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'surname' => ['max:255'],
            'name' => ['max:255'],
            'patronymic' => ['max:255'],
            'id_company' => ['max:255'],
            'country' => ['max:255'],
            'city' => ['max:255'],
            'position' => ['max:255'],
            'phone' => ['max:255', 'unique:users,phone,' . $id],
            'email' => ['max:255', 'unique:users,email,' . $id],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {

            $user = User::find($id);
            $profile = Auth::user();
            if ($profile) {

                $profile->name = $request->input('name', $user->name);
                $profile->patronymic = $request->input('patronymic', $user->patronymic);
                $profile->id_company = $request->input('id_company', $user->id_company);
                $profile->country = $request->input('country', $user->country);
                $profile->city = $request->input('city', $user->city);
                $profile->phone = $request->input('phone', $user->phone);
                $profile->email = $request->input('email', $user->email);
                $credentials = array_filter($request->all());
                $user->update($credentials);
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
    public function updatepassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => ['required', 'different:password'],
            'password' => ['required', 'min:8','same:password_confirmation_edit-password'],
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

}
