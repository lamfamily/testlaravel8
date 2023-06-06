<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function login(Request $request)

    {
        $user_data = [
            'username' => 'lamkakyun',
            'password' => '123456',
            'gender' => 'male',
            'birth' => '2009-10-01',
            'intro' => 'a good boy,like to progam',
        ];

        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == $user_data['username'] && $password == $user_data['password']) {
            unset($user_data['password']);

            return [
                'code' => '0',
                'message' => 'login success',
                'data' => $user_data,
            ];
        } else {
            return [
                'code' => '1',
                'message' => 'login failed',
            ];
        }
    }
}
