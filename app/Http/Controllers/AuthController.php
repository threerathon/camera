<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;
class AuthController extends Controller
{
    public function redirect() {
        $query = http_build_query([
            'client_id' => 	'1444f8d782b9a19b1dbaab09f73d8adb',
            'redirect_uri' => 'http://camera.com/auth/callback',
            'response_type' => 'code',
            'scope' => '',
        ]);

        return redirect('https://oauth.hanet.com/oauth2/authorize?'.$query);
    }
    public function callback(Request $request) {
        $http = new GuzzleHttp\Client;

        $response = $http->post('https://oauth.hanet.com/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => '1444f8d782b9a19b1dbaab09f73d8adb',
                'client_secret' => 'aaf3479b6475c9d5c7c3dc18fae266fe',
                'redirect_uri' => 'http://camera.com/auth/callback',
                'code' => $request->code,
            ],
        ]);
        $token = json_decode((string) $response->getBody(), true);
        $request->session()->put('token', $token);
        return redirect()->route('dashboard');
    }
}
