<!DOCTYPE html>
<html>
<head>
  <title>Belajar Sistem Blade Template Laravel - Laravel App</title>
</head>
<body>
  <header>
    <h2>Blog Laravel App</h2>
    <nav>
      <a href="/">HOME</a>
      |
      <a href="/tentang">TENTANG</a>
      |
      <a href="/kontak">KONTAK</a>
    </nav>
  </header>
  <hr/>
  <br/>
  <br/>

  <!-- bagian ini menampung judul halaman blog -->
  <h3> @yield('judul') </h3>

  <!-- bagian ini menampung konten blog -->
  @yield('konten')

  <br/>
  <br/>
  <hr/>
  <footer>
    <p>Copyright &copy; {{ date('Y') }} Laravel App</a></p>
  </footer>
</body>
</html>