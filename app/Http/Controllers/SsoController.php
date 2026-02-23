<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SsoController extends Controller
{
    public function redirectToAuth()
    {
        $authUrl = "http://127.0.0.1:8085/login?redirect_url=" . urlencode("http://127.0.0.1:8081/callback");

        return redirect($authUrl);
    }

    public function handleCallback(Request $request)
    {
        $token = $request->token;

        if (!$token) {
            return redirect('/login');
        }

        try {
            $decoded = JWT::decode($token, new Key(env('JWT_SECRET'), 'HS256'));

            $user = User::firstOrCreate(
                ['email' => $decoded->email],
                ['name' => $decoded->email, 'password' => bcrypt('dummy')]
            );

            Auth::login($user);

            return redirect('/');
        } catch (\Exception $e) {
            return "Invalid Token";
        }
    }
}
