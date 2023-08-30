<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="" content="">
    <title>index</title>
    <style>
        body{
            background-color: #1c6580;
        }
        .first{
            border-bottom: 3px groove #020101;
            margin:6px;
        }

        .title{
    margin: 6px;
        }
        .body{
    margin: 13px;
        }
        .comments{
    margin: 6px;
        }
        .user{
             margin: -2px; 
        }
        button {
    width: 100px;
    height: 40px;
    background-color: #3b5998;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    margin-bottom:10px;
}
.button{
    margin-bottom: 15px;
}
  .general{
    display:inline-block;
    justify-content: center;
    width: 400px;
    margin-left: calc( (100% - 400px) / 2);
    background-color: #d8d2cb;
    padding:20px;
  }
    </style>

</head>
<body> 
<br>
<div class="general">
       <?php
       use App\Models\Comment;
        foreach($posts as $post ){
            echo '<div class="first">';
           //posted by user
            echo '<div class ="user">'; 
            echo "Posted By : ".app\Http\Controllers\PostController::getuser($post->id);
            echo '</div>';
            // title of post
            echo '<div class = "title">';
            echo 'title :'.$post->Title;
            echo '</div>';
            // body(content of post)
            echo '<div class = "body">';
            echo $post->Body;
            echo '</div>';
            //comments
            echo '<div class="comments">';
            echo 'comments:'.'<br>';
          echo app\Http\Controllers\PostController::post_comments($post->id);
          echo '</div>';
          echo '<div class="button">';
          echo '</div>'
          ?>
          <button type="button" onclick="window.location='http://127.0.0.1:8000/postpage/{{$post->id}}'" name="but">ShowPost</button></div>
         <?php           
        }
     ?>
     <button type="button" onclick="window.location='http://127.0.0.1:8000/addnewpost'">Add New Post</button>
</div>


</body>
</html>