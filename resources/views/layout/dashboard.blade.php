<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dashboard.css') }}">
</head>
<body>

<div class="sidebar">
    <ul>
        <h1> Dashboard </h1>
        <li><a href="dashboard">Home</a></li>
        <li><a href="profil">Profil</a></li>
        <li><a href="admin">Admin</a></li>
        <li><form id="logout-form" action="actionlogout" method="post">
            @csrf
</form>
<a href="actionlogout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
    </ul>
</div>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
<div class="content">
    <h2>Welcome to My Dashboard, {{Auth::user()->nama}}</h2>
    <div class="card">
        <div class="container">
            <h2>Jumlah Pengguna</h2>
            <h2>{{ $totalUsers }}</h2>
        </div>
    </div>
</div>

</body>
</html>