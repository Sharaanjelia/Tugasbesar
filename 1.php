<?php
// You can include the header if you want to reuse it on multiple pages
include('header.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang GoTour</title>
    <link rel="stylesheet" href="1.css">
</head>
<body>
    <div class="container">
        <header>
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
        </header>
        <br><br>
        <div class="container2">
            <section>
                <h2>Visi dan Misi</h2>
                <p>Visi kami adalah menjadi platform terbaik untuk membantu pengguna menjelajahi dunia dengan cara yang mudah dan menyenangkan. Misi kami adalah menyediakan layanan berkualitas tinggi yang mengutamakan kebutuhan pelanggan, serta memberikan pengalaman tak terlupakan dalam setiap perjalanan Anda.</p>
            </section>

            <section>
                <h2>Siapa Kami?</h2>
                <p>Kami adalah tim yang berdedikasi dalam menciptakan aplikasi perjalanan yang memudahkan pengguna untuk menemukan, merencanakan, dan menikmati destinasi impian mereka. Dengan pengalaman bertahun-tahun di industri pariwisata, kami berkomitmen untuk memberikan layanan terbaik kepada Anda.</p>
            </section>

            <section>
                <h2>Tim Kami</h2>
                <div class="team">
                    <div class="team-member">
                        <img src="WhatsApp Image 2025-01-07 at 00.01.22_e7d1f783.jpg" alt="Anggota Tim 1">
                        <h3>Fataya Pratama</h3>
                        <p>CEO & Pendiri</p>
                    </div>
                    <div class="team-member">
                        <img src="WhatsApp Image 2025-01-06 at 13.06.05_12d1f625.jpg" alt="Anggota Tim 2">
                        <h3>Shara Anjelia</h3>
                        <p>Kepala Operasi</p>
                    </div>
                    <div class="team-member">
                        <img src="WhatsApp Image 2025-01-06 at 13.08.27_98d90837.jpg" alt="Anggota Tim 3">
                        <h3>Khairunnisa Nur Aqila</h3>
                        <p>Desainer UI/UX</p>
                    </div>
                </div>
            </section>

            <section>
                <h2>Hubungi Kami</h2>
                <p>Jika Anda memiliki pertanyaan atau butuh bantuan, jangan ragu untuk menghubungi kami melalui layanan kami atau melalui media sosial kami.</p>
            </section>
        </div>
    </div>

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
