<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Admin</h1>

<table id="customers">
  <tr>
  <th>Sejarah</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Email</th>
                <th>No Hp</th>
  </tr>
  @foreach($profil as $p)
  <tr>
  <td>{{ $p->sejarah }}</td>
                <td>{{ $p->visi }}</td>
                <td>{{ $p->misi }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->no_hp }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
