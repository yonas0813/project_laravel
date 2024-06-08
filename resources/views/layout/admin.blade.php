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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<div class="content">
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($admin as $a)
        <tr>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->username }}</td>
            <td>{{ $a->password }}</td>
            <td>
            <a type="button" class="btn btn-danger" href="/deleteadmin/{{$a->id_admin}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

</body>
</html>