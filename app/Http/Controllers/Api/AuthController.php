<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth as FacadesJWTAuth;

class AuthController extends Controller
{
    public function redirect(Request $request) {
        $query = http_build_query([
            'client_id' => 	$request->client_id,
            'redirect_uri' => $request->redirect_uri,
            'response_type' => $request->response_type,
            'scope' => $request->scope,
        ]);

        return redirect('https://oauth.hanet.com/oauth2/authorize?'.$query);
    }
    public function callback(Request $request) {
        $http = new GuzzleHttp\Client;

        $response = $http->post('https://oauth.hanet.com/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => '1444f8d782b9a19b1dbaab09f73d8adb',
                'client_secret' => '9DE6eRFfSdPm26AkxmETpayd5QFVGKuCsn72cUPN',
                'redirect_uri' => 'http://localhost:8000/auth/callback',
                'code' => $request->code,
            ],
        ]);
        return json_decode((string) $response->getBody(), true);
    }
    public function register(RegisterFormRequest $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();
        return response([
            'status' => true,
            'data' => $user
        ], 200);
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if ( ! $token = FacadesJWTAuth::attempt($credentials)) {
                return response([
                    'status' => 'error',
                    'error' => 'invalid.credentials',
                    'msg' => 'Invalid Credentials.'
                ], 400);
        }
        return response([
                'status' => 'success'
            ])
            ->header('Authorization', $token);
    }
    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return response([
                'status' => 'success',
                'data' => $user
            ]);
    }
    public function refresh()
    {
        return response([
                'status' => 'success'
            ]);
    }
}
