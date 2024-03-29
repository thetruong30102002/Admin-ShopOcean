<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function __construct()
    {
    }
    public function index()
    {

        return view('backend.auth.login');
    }
    public function login(AuthRequest $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($credentials)) {
            $auth = Auth::user();
            if ($auth->user_catelogue_id == 1) {
                return redirect()->route('dashboard.index')->with('success', 'Đặng nhập thành công');
            } else {
                Auth::logout();
                return redirect()->route('auth.admin')->with('error', '
        Tài khoản không có quyền đăng nhập');
            }
        }
        return redirect()->route('auth.admin')->with('error', '
        Email hoặc mật khẩu không hợp lệ ');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.admin')->with('success', 'Đăng xuất thành công');
    }
}
