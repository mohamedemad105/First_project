<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
class CommentController extends Controller
{
    //
    static public function post_comments($id)
    {
        $comments = Comment::all()->where('post_id', '=', $id);
        return $comments;
    }
}
