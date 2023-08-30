<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="" content="">
    <title>Post Page</title>
    <style>
        body{
            background-color: #1c6580;
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
    <?php
        echo '<div class=general>';
        // User
        echo '<div class=user>';
            echo "Posted By : ".app\Http\Controllers\PostController::getuser($post->id).'<br>';
        // Title
        echo '<div class=title>';
           echo'title : '.$post->Title.'<br>' ;
        echo '</div>';
        // Body
        echo '<div class=body>';
            echo $post->Body.'<br>';
        echo '</div>';
        // Comments
        echo '<div class=comments>';
        echo 'Comments:'.'<br>';
          echo app\Http\Controllers\PostController::post_comments($post->id).'<br>';
        echo '</div>'; 
          echo '</div>';
          ?>
         <form action= "{{ url('/postpage') }}" method="POST">
            @csrf
         <textarea name="D" id="D" hidden > {{$post->id}}</textarea>
        <?php
         echo '<textarea name="addcomment" id="addcomment" placeholder="add comment">'.'</textarea>'.'<br>';
        ?>
        <input type="submit" name="but">
         </div>
        <?php
        echo '</form>';
        echo '</div>';
    ?>
</body>
</html>