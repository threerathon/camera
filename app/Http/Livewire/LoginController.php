<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class LoginController extends Component
{
    public function render()
    {
        return view('livewire.login-controller')->layout('layouts.outh');
    }
    public function login(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('redirect');
        } else {
            $request->session()->flash('erorr', 'Tên đăng nhập học mật khẩu không đúng');
            return redirect()->route('login');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
