<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    function login(){
        if (Auth::check()) { // This will check if the user is login, if login then the user will not be able to access loginform
            return redirect(route('dashboard'));
        }
        return view('loginform');
    }

    function registration(){
        if (Auth::check()) { // This will check if the user is login, if login then the user will not be able to access register
            return redirect(route('dashboard'));
        }
        return view('register');
    }

    function loginPost(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('dashboard'));
        }
        return redirect(route('login'))->with("error", "login credentials are not valid!"); //with("key", "error message") and inside the route is the name in get
    }

    function registerPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $data['name'] = $request->name; //assign the name from the request variable to data variable
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data); //this will create the user

        if(!$user) {
        return redirect(route('register'))->with("error", "Registration failed, try again."); //with("key", "error message") and inside the route is the name in get
        }
        // redirect to login after successfully registered
        return redirect(route('login'))->with("success", "Registration success, you can now Login."); //with("key", "success message") and inside the route is the name in get
        
    }



    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'))->with('logout_message', true);
    }
}
