<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if ($credentials['username'] == 'adminwpsstnf' && $credentials['password'] == 'wepaknf2024') {
            // Autentikasi berhasil
            return redirect('/areaparkir')->with(['message' => 'Login successful']);
        } else {
            // Autentikasi gagal
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }
}
