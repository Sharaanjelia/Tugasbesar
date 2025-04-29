<?php
// PHP logic could go here, such as fetching data or handling form submissions
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Paket Wisata - Tafsor Barn</title>
  <link rel="stylesheet" href="Tugasbesar.css">
</head>

<body>
  <nav class="navbar">
    <div class="logo">
      <a href="tentangkami.php"> 
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

  <section class="package-detail">
    <h1>Tafsor Barn</h1>
    <img src="tafsor barn.jpg" alt="Tafsor Barn">
    <p>Durasi: 3 Hari 2 Malam</p>
    <p>Harga: Mulai dari Rp1.000.000</p>
    <h2>Deskripsi</h2>
    <p>Tafso Barn adalah sebuah restoran dan kafe yang terletak di Pagerwangi, Lembang, Bandung Barat. Didirikan pada tahun 2016, tempat ini awalnya dibangun sebagai area bermain mini golf yang juga menyajikan berbagai makanan dan minuman. Seiring waktu, Tafso Barn menjadi terkenal karena konsepnya yang kekinian dan suasana yang sangat instagramable, menarik banyak pengunjung untuk berswafoto dan menikmati pemandangan alam yang indah.</p>

    <h2>Fasilitas</h2>
    <ul>
      <li>Akomodasi Hotel Bintang 4</li>
      <li>Transportasi selama tour</li>
      <li>Tour guide berpengalaman</li>
      <li>Asuransi perjalanan</li>
    </ul>
    <button><a href="pembayaran_khai.php">Pesan Sekarang</a></button>
    <button><a href="halaman_diskon.php">Lihat Halaman Diskon</a></button>
    <button><a href="rekomendasifoto.php">Rekomendasi Gaya Foto</a></button>
  </section>

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
