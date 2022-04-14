<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (!$token = Auth::attempt(['email' => 'nhatbui2017@gmail.com', 'password' => '$2y$10$Pp.tszOdy7xWuHMj935h3.xKzgx3FY62VQ3ssvje5jt3nRotQBczK'])) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json(auth('api')->user())->header('Authorization', $token);
    }
}
