<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="{{ asset('login.css') }}">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Register</header>
      <form action="process" method="post">
        @csrf
        <input type="text" placeholder="Id Admin" name="id_admin" required>
        <input type="text" placeholder="Nama Lengkap Admin" name="nama" required>
        <input type="text" placeholder="Enter your Username" name="username" required>
        <input type="password" placeholder="Create a password" name="password" required>
        <button class="btn btn-primary">Register</button>
      </form>
      <div class="signup">
        <span class="signup">Sudah Punya Akun?
            <a href="/">Login</a>
        </span>
      </div>
    </div>
  </div>
</body>
</html>