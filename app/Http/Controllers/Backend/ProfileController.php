<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Manager;
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
                if(empty($companyid))
                {
                    $user->company()->save($company);
                }
                else
                {
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
    public function CreateAndUpdateCompany(Request $request)
    {
            $id = Auth::user()->getAuthIdentifier();
            $companyid = User::find($id)->company;
            if(empty($companyid))
            {
                $newmanagerid = new Manager();

                $newmanagerid->surname = $request['surname'];
                $newmanagerid->name = $request['name'];
                $newmanagerid->patronymic = $request['patronymic'];
                $newmanagerid->phone =  $request['phone_dir'];
                $newmanagerid->email = $request['email_dir'];
                $newmanagerid->save();
                $managerid = Manager::latest()->first()->id;
                $manager = Manager::find($managerid);
                $companyid->manager()->associate($manager)->save();
            }
            else
            {
                $newmanagerid = Company::where('id', $companyid)->manager;

                $newmanagerid->surname = $request['surname'];
                $newmanagerid->name = $request['name'];
                $newmanagerid->patronymic = $request['patronymic'];
                $newmanagerid->phone =  $request['phone_dir'];
                $newmanagerid->email = $request['email_dir'];
                $newmanagerid->update();
            }
            $credentialcompany = array_filter([
                'INN' => $request['INN'],
                'BIK' => $request['BIK'],
                'law_address' => $request['law_address'],
                'mail_address' => $request['mail_address'],
                'fact_address' => $request['fact_address'],
                'KPP' => $request['KPP'],
                'OKPO' => $request['OKPO'],
                'tax_system' => $request['tax_system'],
                'OGPH' => $request['OGPH'],
                'email' => $request['email'],
                'bank_name' => $request['bank_name'],
                'ch_acc' => $request['ch_acc'],
                'corr_acc' => $request['corr_acc'],
                'bank_BIK' => $request['bank_BIK'],
            ]);
            $companyid->ch_acc = $request->input('ch_acc');
            $companyid->corr_acc = $request->input('corr_acc');
            $companyid->update($credentialcompany);
            return response()->json([
                'status' => 200,
                'message' => 'Компания успешно создана!',
            ]);
    }

}
