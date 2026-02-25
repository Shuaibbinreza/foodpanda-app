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
        // $authUrl = "http://127.0.0.1:8000/login?redirect_url=" . urlencode("http://127.0.0.1:8001/callback");
        $authUrl = url(env('AUTH_SERVER_URL') . '/login?redirect_url=' . urlencode(env('APP_CALLBACK_URL')));

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
