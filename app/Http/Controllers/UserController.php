<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validate\Rule;



class UserController extends Controller
{

    //Show Register/CreateForm
    public function create()
    {
        return view('users.register');
    }

    //Create New User
    public function store(Request $request)
    {
        $formFields = $request->validate(array(
            'name' => 'required|min:3',
            'email' =>'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ));

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create User
        $user = User::create($formFields);

        //Login

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');

    }

    // Logout user
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout');
    }

    //Show Login Form
    public function login() {
        return view('users.login');
    }

    //authenticate user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

        return redirect('/')->with('Logged in!');
        }

    return back()->withError(['emila'=>'Invalid Credentials'])->onlyInput('email');
    }
}
