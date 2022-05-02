<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function loginView()
    {
        $data['page_title'] = 'Login';
        return view('auth.login', $data);
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

    }

    public function RegisterView()
    {
        $data['page_title'] = 'Register';
        return view('auth.register', $data);
    }

    public function Register(RegisterRequest $request)
    {
        // dd("helloo");
        $validated = $request->validated();

        return json_encode([
            'success' => 'Doneeee'
        ]);

    }

    public function ForgetPasswordView()
    {
        $data['page_title'] = 'Forget Password';
        return view('auth.forget-password', $data);
    }
}
