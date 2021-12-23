<!DOCTYPE html>
<html>
<head>
  <title>Laravel App - Request Data Laravel</title>
</head>
<body>
   <h3>Form Pendaftaran</h3>
  <form action="pendaftaran/proses" method="post">
        {{csrf_field()}}
        Nama :
    <input type="text" name="nama">
    <br/>
    <br/>
    Alamat :
    <input type="text" name="alamat">
    <br/>
    <hr/>
    <input type="submit" value="Simpan">
  </form>
</body>
</html>