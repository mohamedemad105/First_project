<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
class AuthController extends Controller
{
    public function registerForm(){
        return view('register');
    }
    public function register(Request $request){
        $data = new User;
        $data = $request;
        $data['password']= bcrypt($data['password']);
        $user = User::create($data);
        Auth::Login($user);
        return redirect(url('/'));
    }
    public function loginForm(){
        return view('/Login');
    }

    // public function login(Request $request){
    //     $data = $request;
    //     $is_login = Auth::attempt(["Name"=>$data['Name'],"password"=>$data['password']]);
    //     if($is_login != true){
    //         return redirect(url('login'))->withErrors("");
    //     }
    //     return redirect(url('/homepage'));
    // }

    public function logout(){
        Auth::logout();
        return redirect(url('Login'));
    }
}