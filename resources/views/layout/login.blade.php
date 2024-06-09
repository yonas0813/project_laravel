<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!--- Custom CSS File --->
  <link rel="stylesheet" href="{{ asset('login.css') }}">
</head>

<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="actionlogin" method="post">
        @csrf
        <input type="text" placeholder="Enter your Username" name="username" required>
        <input type="password" placeholder="Enter your password" name="password" required>
        <button class="btn btn-primary" type="submit">Login</button>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
            <a href="register">Register</a>
        </span>
      </div>
      <div class="signup">
        <span class="signup">
            <a href="loginuser">Login User</a>
        </span>
      </div>
    </div>
  </div>
</body>

</html>