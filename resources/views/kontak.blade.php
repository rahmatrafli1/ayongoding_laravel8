<!-- Menghubungkan dengan view template master -->
@extends('templates.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Halaman Kontak')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

  <p>Ini Adalah Halaman Kontak</p>
  
  <table border="1" cellpadding="3" cellspacing="0">
    <tr>
      <td>Email</td>
      <td>:</td>
      <td>info@laravelapp.com</td>
    </tr>
    <tr>
      <td>Facebook</td>
      <td>:</td>
      <td>facebook/laravelapp</td>
    </tr>
    <tr>
      <td>Twitter</td>
      <td>:</td>
      <td>twitter/laravelapp</td>
    </tr>
    <tr>
      <td>Hp</td>
      <td>:</td>
      <td>0896-4347-5051</td>
    </tr>
  </table>

@endsection