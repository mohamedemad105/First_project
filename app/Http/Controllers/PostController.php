<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Http\Controllers\CommentController;

class PostController extends Controller
{
    //
    public function InsertPost(Request $request)
    {
        $post = new Post;
        $post->Title = $request->Title;
        $post->Body = $request->Body;
       $users= User::all();
       $check = 0;
       foreach($users as $user){
        if ($user->Name==$request->username){
            $post->user_id=$user->id;
            $check = 1;
            break;
        }
       }
        if (!$check)
            $post->user_id=1;
        $post->save();
        //return response("post added sucssisfully");
    }
    public function DeletePost(Request $request)
    {
        $post = Post::find($request->Pid);
        $post->delete();
    }
    public function ShowPost($id)
    {
        $post = Post::find($id);
        return view('postpage',['post'=>$post]);
    }
    public function AddPostPage()
    {
        return view('addnewpost');
    }
   static public function ShowPosts()
    {
        $posts = Post::all();
        return view('/homepage', ['posts' => $posts]);
    }
    static public function getuser($id)
    {
        $post = Post::find($id);
        return $post->user->Name;
    }
    static public function post_comments($id)
    {
        $Comments = Comment::all();
        $users = User::all();
        foreach ($Comments as $comment) {
            if ($comment->post_id == $id) {
                echo '<br>' . $comment->Body . '<br>';
            }
        }
    }
    public function AddComment(Request $request){
        $comment = new Comment;
        $comment->Body=$request->addcomment;
        $comment->user_id=1;
        $comment->post_id=$request->D;
        $comment->save();
        return response('Comment added sucssisfully');
    }
}