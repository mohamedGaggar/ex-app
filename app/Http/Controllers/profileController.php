<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
class profileController extends Controller
{
    public function index(){
        $user = Auth::user();


$data=$user->purchasedPosts;


        return view('profile',compact('data'));
    }



    public function logout(){

        auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/login');

       }



}
