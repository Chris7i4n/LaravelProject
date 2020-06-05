<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UniversalLoginController extends Controller
{   
    public function __construct(){
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        // //Validate the form data
        // $this->validate($request, [
        //     'cpf' => 'required|string',
        //     'password' => 'required|string',
        // ]);
        //Attempt to log user in
        if(Auth::guard('admin')->attempt(['cpf' => $request->cpf, 'password' => $request->password], $request->remenber))
        {
            return redirect()->intended(route('dashboard.index'));
        }
        if(Auth::guard('web')->attempt(['cpf' => $request->cpf, 'password' => $request->password], $request->remenber))
        {
            return redirect()->intended(route('dashboard.index'));
        }

        return redirect()->back()->withInput($request->only('cpf','remenber'));

        //if unsucessful, then redirect  back o the login withe the form data
    }

    public function logout(Request $request)
    {
        if(Auth::guard('web')->check())
        {
            Auth::guard('web')->logout();
        }
        if(Auth::guard('admin')->check())
        {    
            Auth::guard('admin')->logout();
        }
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/');
    }
}
