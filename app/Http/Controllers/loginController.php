<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){

        return view('login');

        }




        public function login(Request $request)
        {
            $dataValidate=$request->validate(['email'=>'required|email|exists:users,email',
            'password'=>'required|string|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/|min:4',
        ]);

    $remember=$request['remember'] ? true : false;
    if(auth::attempt($dataValidate,$remember)){


        session()->regenerate();

    return redirect('/home');
    }else {
        return back()->withInput($dataValidate)->withErrors(['error'=>'password is invalid']);
    }
}

}
