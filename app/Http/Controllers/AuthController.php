<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    public function login_view() {
        return view('auth.login');
    }

    public function login_auth(Request $request) {

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return response()->json([
                'success' => true,
                'message' => 'Acceso satisfactorio'
            ]);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'Email o Contraseña incorrectos'
            ]);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
