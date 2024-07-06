<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index(){

        return view('register');

        }


        public function register(request $request)
        {
         $dataVlidation=   $request->validate([
                'name'=>'required|string',
                'email'=>'required|email',
                'password'=>'required|string|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/|min:4',
            ]);

        try {

            $dataVlidation['password']=Hash::make($dataVlidation['password']);

            user::create($dataVlidation);

            return back()->with(['success'=>'registeration has been done successfully']);

        } catch (\Throwable $th) {
            //throw $th;
            return back()->with(['error'=>'email has been taken']);
        }

            if (auth::attempt($dataVlidation)) {
                return back()->with(['email'=>'this email has already been taken ']);
            }









        }

}
