<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoTour</title>
  <link rel="stylesheet" href="Tugasbesar.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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

      <section id="beranda">
        <div class="hero">
          <div class="carousel">
            <div class="carousel-item">
              <video autoplay muted loop>
                <source src="latarbelakang.mp4" type="video/mp4" >
              </video>
              <div class="carousel-caption">
                <h2>Selamat Datang di GoTour</h2>
                <p>Kami membantu membuat liburan Anda menjadi lebih mudah dan menyenangkan.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="HalUtama1.jpg" alt="Gambar 2">
              <div class="carousel-caption">
                <h2>Ayo Menjelajah Bersama Kami</h2>
                <p>Kami telah melayani ratusan hingga ribuan wisatawan dengan hasil yang memuaskan</p>
              </div>
            </div>
            <div class="carousel-item">
              <video autoplay muted loop>
                <source src="lt.mp4" type="video/mp4" >
              </video>
              <div class="carousel-caption">
                <h2>Dengan Sangat Banyak Tempat Pariwisata</h2>
                <p>Disini banyak pilihan tempat pariwisata dan bisa menyesusaikan dengan jadwal anda</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="paket_wisata">
        <section class="featured-packages">
          <h1>Paket Wisata Unggulan</h1>
          <div class="arrow-icon">&#x25BC;</div>
          <div class="package-cards">
            <div class="card">
              <img src="Barusen Hills Ciwidey.jpg" alt="Barusen Hills ciwidey">
              <h3>Barusan Hills</h3>
              <p>3 Hari 2 Malam</p>
              <p>Rp2.000.000</p>
              <p class="discount">Diskon: 20%</p> <!-- Discount information -->
              <div class="rating">
                <span class="star" onclick="rate(this, 1)">&#9733;</span>
                <span class="star" onclick="rate(this, 2)">&#9733;</span>
                <span class="star" onclick="rate(this, 3)">&#9733;</span>
                <span class="star" onclick="rate(this, 4)">&#9733;</span>
                <span class="star" onclick="rate(this, 5)">&#9733;</span>
              </div>
              <div class="result"></div>
              <button><a href="barusen_hills_ciwidey.php">Lihat Detail</a></button>
            </div>        
            <div class="card">
              <img src="barga.webp" alt="braga">
              <h3>Braga</h3>
              <p>3 Hari 2 Malam</p>
              <p>Rp2.000.000</p>
              <p class="discount">Diskon: 12%</p> <!-- Discount information -->
              <div class="rating">
                <span class="star" onclick="rate(this, 1)">&#9733;</span>
                <span class="star" onclick="rate(this, 2)">&#9733;</span>
                <span class="star" onclick="rate(this, 3)">&#9733;</span>
                <span class="star" onclick="rate(this, 4)">&#9733;</span>
                <span class="star" onclick="rate(this, 5)">&#9733;</span>
              </div>
              <div class="result"></div>
              <button><a href="braga.php">Lihat Detail</a></button>
            </div>
            <div class="card">
              <img src="tafsor barn.jpg" alt="Tafso Barn">
              <h3>Tafso Barn</h3>
              <p>2 Hari 1 Malam</p>
              <p>Rp1.000.000</p>
              <p class="discount">Diskon: 15%</p> <!-- Discount information -->
              <div class="rating">
                <span class="star" onclick="rate(this, 1)">&#9733;</span>
                <span class="star" onclick="rate(this, 2)">&#9733;</span>
                <span class="star" onclick="rate(this, 3)">&#9733;</span>
                <span class="star" onclick="rate(this, 4)">&#9733;</span>
                <span class="star" onclick="rate(this, 5)">&#9733;</span>
              </div>
              <div class="result"></div>
              <button><a href="tafsor_barn.php">Lihat Detail</a></button>
            </div>
            <div class="card">
              <img src="lembang.jpeg" alt="lembang">
              <h3>Lembang</h3>
              <p>2 Hari 1 Malam</p>
              <p>Rp1.000.000</p>
              <p class="discount">Diskon: 25%</p> <!-- Discount information -->
              <div class="rating">
                <span class="star" onclick="rate(this, 1)">&#9733;</span>
                <span class="star" onclick="rate(this, 2)">&#9733;</span>
                <span class="star" onclick="rate(this, 3)">&#9733;</span>
                <span class="star" onclick="rate(this, 4)">&#9733;</span>
                <span class="star" onclick="rate(this, 5)">&#9733;</span>
              </div>
              <div class="containerCari">
                <div class="result"></div>
                <button><a href="the_great_asia_africa_lembang.php">Lihat Detail</a></button>
              </div>
            </div>
          </div>
        </section>
  </div>
  <div class="result">
    <button class="carii"><a href="paket_wisata.php">Cari Sekarang <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
      <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
    </svg></a></button>
  </div>
  <br>
  </div>
  <section class="cta">
    <h2>Memudahkan Liburan Anda!</h2>
  </section>
 
  <section id="destinasi_populer">
    <section class="featured-packages">
      <h1>Destinasi Populer</h1>
      <div class="arrow-icon">&#x25BC;</div>
      <div class="destination-cards">
        <div class="destination-card" style="background-image: url('lembang.jpeg');">
          <h3>Lembang, Bandung</h3>
        </div>
        <div class="destination-card" style="background-image: url('barga.webp');">
          <h3>Braga, Bandung</h3>
        </div>
        <div class="destination-card" style="background-image: url('Ciwidey Valley Hot Spring Waterpark Resort.jpg');">
          <h3>Ciwidey Valley Hot Spring Waterpark Resort, Bandung</h3>
        </div>
      </div>
    </section>
</div>
<div class="result">
<button class="carii"><a href="destinasipopuler.php">Lihat Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
</svg></a></button>
</div>
</div>
<br>

  <section class="cta">
    <h2>Ayo Pergi Bersama Kami!</h2>
  </section>

  <!-- Bagian Blog -->
  <section id="Blog_Terbaru">
    <section class="Blog">
      <h2>Blog Terbaru</h2>
      <div class="blog-posts">
        <div class="blog-post">
          <h3>32 Destinasi Wisata Terbaik di Bandung</h3>
          <p>Temukan destinasi wisata terbaik yang wajib Anda kunjungi saat berada di Bandung.</p>
          <button><a href="https://www.klook.com/id/blog/tempat-wisata-di-bandung/?msockid=2e22a4680a5d69d02b50b0f40b016851">Baca Selengkapnya</a></button>
        </div>
        <div class="blog-post">
          <h3>5 Tips Berwisata Hemat</h3>
          <p>Ikuti tips ini untuk berwisata dengan budget yang lebih hemat dan tetap menyenangkan.</p>
          <button><a href="https://www.idntimes.com/travel/tips/zaffy-febryan/tips-wisata-hemat-c1c2">Baca Selengkapnya</a></button>
        </div>
        <div class="blog-post">
          <h3>Pose Foto yang Menarik</h3>
          <p>Bagi Anda yang senang mengunggah berbagai pose foto, tentu akan sebisa mungkin membuat pose foto yang menarik dan bagus.</p>
          <button><a href="https://tekno.kompas.com/read/2022/05/26/11150067/10-ide-pose-foto-untuk-instagram-agar-lebih-menarik#google_vignette">Baca Selengkapnya</a></button>
        </div>
      </div>
    </section>
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
</div>

<script>
  const carouselItems = document.querySelectorAll('.carousel-item');
  let currentSlide = 0;

  setInterval(() => {
    carouselItems[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % carouselItems.length;
    carouselItems[currentSlide].classList.add('active');
  }, 7000);

  carouselItems[0].classList.add('active');

  function rate(starElement, star) {
    const result = starElement.parentElement.nextElementSibling;
    result.innerHTML = "Anda memberi rating: " + star + " bintang";

    const stars = starElement.parentElement.children;
    for (let i = 0; i < stars.length; i++) {
      if (i < star) {
        stars[i].style.color = "gold";
      } else {
        stars[i].style.color = "gray";
      }
    }
  }
</script>
</body>
</html>
