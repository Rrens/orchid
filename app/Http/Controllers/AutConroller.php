<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

class AutConroller extends Controller
{
    public function login()
    {
        return view('admin.pages.login');
    }

    public function post_login(Request $orchid)
    {
        // dd($orchxid->all());
        $validator = Validator::make($orchid->all(), [
            'email' => 'required',
            'password' => 'required'

        ]);

        if ($validator->fails()) {
            dd($validator->messages()->all());
        }

        $data = [
            'email' => $orchid->email,
            'password' => $orchid->password
        ];
        if (!Auth::attempt($data)) {
            dd('Email or Password is wrong');
        }

        dd('login bner');
    }
}
