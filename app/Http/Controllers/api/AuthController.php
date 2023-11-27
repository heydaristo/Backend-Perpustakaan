<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Tambahkan user ke database
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 0, // Nilai default untuk role user
        ]);

        // Beri respons atau lakukan tindakan lain sesuai kebutuhan
        return response()->json(['message' => 'User registered successfully', 'user' => $user]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $accessToken = auth()->user()->createToken('authToken')->accessToken;

            return response()->json([
                'message' => 'Login successful',
                'user' => auth()->user(),
                'access_token' => $accessToken,
            ]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
    
    public function logout(Request $request)
    {
    // Mendapatkan objek token yang sedang digunakan oleh pengguna
    $token = $request->user()->token();

    // Memastikan objek token tidak null sebelum menjalankan operasi revoke
    if ($token) {
        // Melakukan operasi revoke pada objek token
        $token->revoke();

        return response()->json(['message' => 'Logout successful']);
    } else {
        return response()->json(['error' => 'Token not found'], 404);
    }
    }
}
