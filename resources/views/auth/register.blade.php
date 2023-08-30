<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="Re_main.css">
  <style>
   body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color:#f3f4f6 ;
  }
  
  nav {
    background-color: #3b5998;
    color: #fff;
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
    /* background-image: url("images/2.png"); */
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
  #gen{
    display: flex;
  }
  #gender{
    margin-left:5px;
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
      <li><a href="{{ url('Login') }}">Login</a></li>
    </ul>
  </nav>

  <div class="background-image"></div>

  <div class="container">
    <section id="home">
      <h2></h2>
      <p></p>
    </section>

    <section id="login">
      <h2>Registeration</h2>
      <form method="POST" action="{{ url('/Register') }}">
        <div class="form-group">
        @csrf
          <label for="Name">Name</label>
          <input type="text" id="Name" name="Name" placeholder ="enter name"required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="enter password"required>
        </div>
        <div class="form-group" id="gen">
          <label for="gender">Gender</label>
          <!-- <input type="radio" name="male" id="male">
          <label for="male">male</label>
          <input type="radio" name="female" id="female">
          <label for="male">female</label> -->
          <select name="gender" id="gender" >
            <option value="Male" name="Male" id="Male">male</option>
            <option value="Female">female</option>
          </select>
        </div>
        <div class="form-group">
          <label for="address">Adress</label>
          <input type="text" id="address" name="address" placeholder="enter address"required>
        </div>
        <button type="submit">Register</button>
      </form>
    </section>
  </div>

</body>
</html>