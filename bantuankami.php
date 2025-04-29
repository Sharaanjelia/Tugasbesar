<?php
// Include the header if you want to reuse it across multiple pages
include('header.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan Kami - GoTour Bandung</title>
    <link rel="stylesheet" href="bantuankami.css">
</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <a href="1.php"> 
        <img src="IMG_7079-removebg-preview.png" alt="GoTour Logo" style="height: 50px;">
      </a>  
    </div>
    <ul class="nav-links">
      <li><a href="TugasBesar.php">Beranda</a></li>
      <li><a href="paket_wisata.php">Paket Wisata</a></li>
      <li><a href="kategori.php">Kategori</a></li>
      <li><a href="destinasipopuler.php">Destinasi Populer</a></li>
      <li><a href="layanan.php">Layanan</a></li>
      <li><a href="testimoni.php">Testimoni</a></li>
      <li><a href="blog1.php">Blog</a></li>
      <li><a href="bantuankami.php" class="Bantuan Kami-btn">Bantuan Kami</a></li> 
    </ul>
    <div class="auth-buttons">
      <a href="Login.php" class="login-btn">Login</a>
      <a href="daftar_khai.php" class="signup-btn">Daftar</a>
    </div>
  </nav>

  <br><br>

  <main>
    <section class="help-section">
      <h1>Bantuan Kami</h1>
      <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami melalui salah satu metode berikut:</p>

      <div class="help-options">
        <div class="option">
          <h2>Email</h2>
          <p>Kirimkan email ke <strong>tamafataya01@gmail.com</strong></p>
        </div>

        <div class="option">
          <h2>Telepon</h2>
          <p>Hubungi kami di <strong>+62 821-2937-9808</strong></p>
        </div>

        <div class="option">
          <h2>Chat Langsung</h2>
          <p>Klik tombol di bawah untuk memulai chat langsung dengan tim kami.</p>
          <button>Mulai Chat</button>
        </div>
      </div>

      <h2>FAQ</h2>
      <p>Kami telah menyusun daftar pertanyaan yang sering diajukan untuk membantu Anda menemukan jawaban dengan cepat.</p>
      <ul class="faq-list">
        <li><strong>Bagaimana cara memesan paket wisata?</strong> Anda dapat memesan melalui halaman <a href="paket_wisata.php">Paket Wisata</a>.</li>
        <li><strong>Apakah saya bisa membatalkan pesanan?</strong> Ya, pembatalan dapat dilakukan melalui akun Anda atau dengan menghubungi kami.</li>
        <li><strong>Bagaimana cara mendapatkan promo?</strong> Promo tersedia di halaman <a href="halaman_diskon.php">Promo</a>.</li>
      </ul>
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h3>Informasi</h3>
          <ul>
            <li>Alamat: Jl. Telekomunikasi, Bandung, Jawa Barat, Indonesia</li>
            <li>Telepon: 0821-2937-9808</li>
            <li>Email: <a href="mailto:tamafataya01@gmail.com">tamafataya01@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>Media Sosial</h3>
          <ul>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>Layanan</h3>
          <ul>
            <li>Paket Wisata</li>
            <li>Pemandu Wisata</li>
            <li>Transportasi</li>
            <li>Akomodasi</li>
            <li>Aktivitas Tambahan</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>Bantuan</h3>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Syarat dan Ketentuan</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
          </ul>
        </div>
      </div>
      <div class="copyright">
        <p>&copy; 2024 GoTour. Hak cipta dilindungi.</p>
      </div>
    </div>
  </footer>

</body>
</html>
