<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')
                     ->latest()
                     ->get();
        $user = Auth::user();

        return view('feed', compact('posts', 'user'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        
        $name = $request->input('name');
        $email = $request->input('email');
        $headline = $request->input('headline');
        $password = $request->input('password'); 
        $company = $request->input('company');
        $remember = $request->input('remember_token');
        $image = $request->file('image');

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'headline' => 'required',
            'password' => 'required',
            'company' => 'required',
            'remember_token' => 'required',
            'image' => 'required',
        ]);
        User::create([
            'name' => $name,
            'email' => $email,
            'headline' => $headline,
            'password' => bcrypt($password),
            'company' => $company,
            'remember_token' => $remember,
            'image_url' => $image,
        ]);

        return view('login');
    }
    public function login(){
        return view('login');
    }
    public function login1(Request $request){
        // dd($request->all());
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

if ($user && Hash::check($password, $user->password)) {

    Auth::login($user);

    return redirect()->route('index');
}

return back()->withErrors([
    'email' => 'Invalid email or password'
]);
    }

}