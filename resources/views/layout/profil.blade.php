<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

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
    <a href="tambahprofil" class="btn btn-primary">Tambah</a>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Sejarah</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Email</th>
                <th>No Hp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($profil as $index => $p)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $p->sejarah }}</td>
                <td>{{ $p->visi }}</td>
                <td>{{ $p->misi }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->no_hp }}</td>
                <td>
                    <a href="/ubahprofil/{{$p->id_profil}}" class="btn btn-warning">EDIT</a>
                    <a href="/deleteprofil/{{$p->id_profil}}" class="btn btn-danger">HAPUS</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- Place your content here -->
</div>

</body>
</html>