<?php

namespace App\Http\Controllers;

use App\Contracts\UserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function __construct(private UserRepository $userRepository)
    {
        //
    }

    public function loginForm()
    {
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $isLoggedIn = $this->userRepository->login($request->email, $request->password);

        if (!$isLoggedIn) {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        return redirect()->route('home');
    }

    public function registerForm()
    {
        return view('pages.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $this->userRepository->register($request->only('name', 'email', 'password'));

        return redirect()->route('home');
    }

    public function logout()
    {
        $this->userRepository->logout();

        return redirect()->route('auth.login.form');
    }
}
