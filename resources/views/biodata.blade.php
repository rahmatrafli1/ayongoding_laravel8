<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Passing Data Array pada Laravel - Laravel App</title>
</head>
<body>
  <h1>Tutorial Laravel - Laravel App</h1>
  <br>
  <p>Nama : {{$nama}}</p>
  <p>Mata Pelajaran</p>
  <ul>
    @foreach($mapel as $m)
    <li>{{$m}}</li>
    @endforeach
  </ul>
</body>
</html>