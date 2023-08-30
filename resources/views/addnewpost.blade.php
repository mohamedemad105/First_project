<html>
    <head>
        <title>Form example</title>
        <link href="{{ asset('bootstrap\css\bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('bootstrap\js\bootstrap.min.js') }}" defer></script>
    </head>
    <body>
        <div class="container">
            <h1>Add Post</h1>
            @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif
        <form method="POST" action="{{ url('/addnewpost') }}">
             {{ csrf_field() }}
        <div class="form-group">
        <label for="username">User Name</label>
            <input id="username" type="text" name="username" class="form-control" placeholder="username" required>
            <label for="Title">Post Title</label>
            <input id="Title" type="text" name="Title" class="form-control" placeholder="Title" required>
        </div>
        <div class="form-group">
            <label for="Body">Post Content</label>
            <textarea type="text" id="Body" name="Body" class="form-control" placeholder="post content" required>
</textarea>
            <br>
        </div>
        <div class="form-group">
            <button class="btn btn-success btn-submit" style="background-color:#3b5998;">Submit</button>
        </div>
        </form>
    </body>
</html>