<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use app\Models\Comment;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Contracts\View\Factory;

class UserController extends Controller
{

    //
    public function CheckUser(Request $request)
    {
        $users = User::all();
        $check = 0;
        foreach ($users as $user) {
            if ($user->password == $request->password && $user->Name == $request->Name) {
                $check = 1;
                break;
            }
        }
        if ($check) {
            return PostController::ShowPosts();
        } else {
            echo "Invalid Data Try Again";
            return view('Login');
        }
    }
    public function InsertUser(Request $request)
    {
        $user = new User;
        $user->Name = $request->Name;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->password = $request->password;
        Auth::login($user);
        $user->save();
        return response("data added sucssisfully");
    }
    public function DeleteUser(Request $request)
    {
        $user = User::find($request->Uid);
        $user->delete();
    }

}