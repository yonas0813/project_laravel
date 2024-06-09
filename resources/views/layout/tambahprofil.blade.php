<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Profile</title>

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
    <div class="content">
        <form action="/insertdata1" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama Admin</label>
                <select name="id_admin" id="provinsi">
                    <option disabled selected> Pilih </option>
                    @foreach($admin as $a)
                        <option value="{{ $a->id_admin }}">{{ $a->nama }}</option>
                    @endforeach
                </select>
            </div>
            <br><br>
            <div class="form-group">
                <label for="">ID Profil</label>
                <input type="text" placeholder="Id Profil" name="id_profil">
            </div>
            <br><br>
            <div class="form-group">
                <label for="">Sejarah</label>
                <textarea name="sejarah" id=""></textarea>
            </div>
            <br><br>
            <div class="form-group">
                <label for="">Visi</label>
                <textarea name="visi" id=""></textarea>
            </div>
            <br><br>
            <div class="form-group">
                <label for="">Misi</label>
                <textarea name="misi" id=""></textarea>
            </div>
            <br><br>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <br><br>
            <div class="form-group">
                <label for="">No Hp</label>
                <input type="text" name="no_hp">
            </div>
            <br><br>
            <button class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>