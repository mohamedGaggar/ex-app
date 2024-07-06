<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Email;
use Illuminate\Support\Facades\Hash;
class adminController extends Controller
{
    public function index() {
        return view('adminLogin');
    }

    public function adminLogin(Request $request) {
        $credentials = $request->validate([
            'adminEmail' => 'required|email|exists:admins,adminEmail',
            'password' => 'required|string'
        ]);
$id=Admin::where('adminEmail',$credentials['adminEmail'])->first();

        if ($credentials['adminEmail']  == $id['adminEmail'] && $credentials['password'] == $id['password']) {
            $request->session()->regenerate();
            return redirect()->route('adminPage');
        }
        else{
            return back()->with(["message"=>"Erorr"]);
        }
    }

    public function create(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'attachment' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|string',
            'url' => 'required|string',
        ]);

        if ($request->file('attachment')) {
            $attachment = $request->file('attachment');
            $path = $attachment->move('attachments', time() . "." . $attachment->extension());
            $data['attachment'] = $path;
        }

        $adminIds = Admin::all();
        foreach ($adminIds as $adminId) {
            $data['admin_id'] = $adminId->id;
        }

        Post::create($data);

        return back()->with('success', 'Post has been created successfully');
    }

    public function adminIndex() {
        return view('adminPage');
    }

}
