<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function login(Request $request)
    {
        $req = $request->all();
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->guard('bidan')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ])) {
            return redirect()->route('authBidan');
        } else if (auth()->guard('ibu')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ])) {
            return redirect()->route('ibu.index');
        } else {
            return redirect()->route('login')->with('error', 'Username atau Password Salah');;
        }
    }

    public function showLoginForm()
    {
        return view('testing.login');
    }
}
