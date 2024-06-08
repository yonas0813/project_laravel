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
<form action="/updatedata1/{{$profil->id_profil}}" method="post">
    @csrf

    <div class="form-group">
        <label for="id_admin">Nama Admin</label>
        <select name="id_admin" id="id_admin">
            <option disabled selected>Pilih</option>
            @foreach ($admin as $a)
                <option value="{{ $a->id_admin }}" {{ $a->id_admin == $profil->id_admin ? 'selected' : '' }}>{{ $a->nama }}</option>
            @endforeach
        </select>
    </div><br><br>

    <div class="form-group">
        <label for="sejarah">Sejarah</label>
        <textarea name="sejarah" id="sejarah">{{ $profil->sejarah }}</textarea>
    </div><br><br>

    <div class="form-group">
        <label for="visi">Visi</label>
        <textarea name="visi" id="visi">{{ $profil->visi }}</textarea>
    </div><br><br>

    <div class="form-group">
        <label for="misi">Misi</label>
        <textarea name="misi" id="misi">{{ $profil->misi }}</textarea>
    </div><br><br>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $profil->email }}">
    </div><br><br>

    <div class="form-group">
        <label for="no_hp">No Hp</label>
        <input type="text" name="no_hp" value="{{ $profil->no_hp }}">
    </div><br><br>

    <button class="btn btn-primary" type="submit">Ubah</button>
</form>
</div>

</body>
</html>