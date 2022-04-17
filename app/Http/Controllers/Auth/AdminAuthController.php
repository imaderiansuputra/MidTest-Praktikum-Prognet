<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function index() {
        return view('auth.admin.login');
    }

    public function login(Request $request) {

        // dd($request);

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {            
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'username' => 'User the right admin username!',
        ]);
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function dashboard() {
        return view('admin.home');
    }
}
