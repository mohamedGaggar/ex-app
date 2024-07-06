<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Cart;
class homeController extends Controller
{

    public function index() {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function homePost(Request $request) {

        $data=  $request->validate([
            'attachment' => 'nullable|string',
            'title' => 'required|string',
            'price' => 'required|string',
            'url' => 'required|string',


    ]);



    $user=auth()->user();

    $data['user_id']=$user->id;
      Cart::create($data);





        return back()->with('success', 'Post sent successfully');
    }



    public function search(request $request){

        $title = $request->input('title');

        $results = Post::where('title', 'LIKE', '%' . $title . '%')
            ->get();

        return view('searchResults', compact('results'));

    }

}
