<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Sentinel;
class AdminLoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest:admin')->except('logout');
    // }

    /**
     * Show the application’s login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    protected function guard(){
        return Auth::guard('admin');
    }

    public function logoutAdmin(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/admin/login');
    }

    
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
}
