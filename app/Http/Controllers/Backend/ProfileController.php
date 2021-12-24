<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\cities;
use App\Models\countries;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        return view('users.profile');
    }

    public function fetchprofile()
    {
        $id = Auth::user()->getAuthIdentifier();
        $city = cities::all();
        $country = countries::all();
        return response()->json([
           Auth::user()->with('cities')->with('countries')->find($id),
            'city' => $city,
            'country' => $country,
        ]);
    }
}
