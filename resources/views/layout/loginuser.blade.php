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
      <form action="actionlogin1" method="post">
        @csrf
        <input type="text" placeholder="Enter your Nama" name="nama" required>
        <input type="password" placeholder="Enter your password" name="password" required>
        <button class="btn btn-primary" type="submit">Login</button>
      </form>
      <div class="signup">
        <span class="signup">
            <a href="/">Login Admin</a>
        </span>
      </div>
    </div>
  </div>
</body>

</html>