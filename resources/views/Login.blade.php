<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="" content="">
    <title>Login</title>
    <link href="{{ asset('bootstrap\css\bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('bootstrap\js\bootstrap.min.js') }}" defer></script>
    <style> 
   body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color:#f3f4f6 ;
  }
  
  nav {
    background-color:#3b5998;
    color: #efefef;
    padding: 10px;
  }
  
  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
  }
  
  nav ul li {
    margin-right: 20px;
  }
  
  nav ul li a {
    color: #fff;
    text-decoration: none;
  }
  
  .background-image {
    background-size: cover;
    background-position: center;
    height: 100vh;
    opacity: 0.8;
  }
  
  .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    position: relative;
    top: -550px;
    border-radius: 30px;
  }
  
  h2 {
    text-align: center;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input {
    width: 100%;
    height: 40px;
    padding: 5px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 50px;
  }
  
  button {
    width: 100%;
    height: 40px;
    background-color: #3b5998;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 50px;
  }
  
  button:hover {
    background-color: #2d4373;
  }
  
  
  
  </style>
</head>
<body>
@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
            @endif
  <nav>
    <ul>
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('register') }}">Register</a></li>
    </ul>
  </nav> 

  <div class="background-image"></div>

<div class="container">
  <section id="home">
    <h2></h2>
    <p></p>
  </section>

  <section id="">
    <h2>Login</h2>
    <form method="POST" action="{{ url('/Login') }}">
    @csrf
      <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" id="Name" name="Name" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name ="password" required>
      </div>
      <button type="submit" name="submit">Login</button>
    </form>
  </section>
</div>
</body>
</html>