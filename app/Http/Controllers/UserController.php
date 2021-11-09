<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(UserStoreRequest $request)
    {
        return User::create(['password' => Hash::make($request->password)] + $request->all());
    }

    public function apiLogin(ApiLoginRequest $request)
    {
        $user = User::whereEmail($request->email)->first();

        if($user && Hash::check($request->password, $user->password))
        {
            $user->api_token = Str::random(32);
            $user->save();
            return ['token' => $user->api_token];
        }
        return ['email' => 'Email or password incorrect'];
    }
}
