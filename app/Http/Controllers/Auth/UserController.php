<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    
    public function index() {
        return view('auth.login');        
    }

    public function register_index()
    {
        return view('auth.register');
    }

    public function register(Request $request) { 
        $request->validate([
            'name' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'email' , 'max:255'],
            'password' => ['required', 'min:8'],
        ]);

        // dd($request);
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.login-index')->with('success', 'Users sucessfully created');
    }

    public function login(Request $request) {

        // dd($request);
        
        $credentials = $request->validate([
            'email' => ['required' , 'email' , 'max:255'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::guard('user')->attempt($credentials)) {
            if (!Hash::check($request->password, auth('user')->user()->password)) {
                return back()->withErrors(['password' => 'The provided password does not match our records.']);
            }
        
            $request->session()->regenerate();
            return redirect()->intended('user/dashboard');
        }

        return back()->withErrors([
            'email' => 'Your email does not match our records, Please enter the registered email !!',
        ]);
    }
  
    public function logout(Request $request)
    {
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function dashboard()
    {
        return view('user.home');
    }

}
