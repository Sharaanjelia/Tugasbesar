<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Review Restoran</title>
    <link rel="stylesheet" href="halaman review.css">
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar">
              <div class="logo">
                <a href="file:///C:/tugas%20%20besar%20uid/tentangkami.html"> 
                  <img src="IMG_7079-removebg-preview.png" alt="GoTour Logo" style="height: 50px;">
                </a>  
              </div>
              <ul class="nav-links">
                <li><a href="TugasBesar.html">Beranda</a></li>
                <li><a href="paket wisata.html">Paket Wisata</a></li>
                <li><a href="kategori.html">Kategori</a></li>
                <li><a href="destinasipopuler.html">Destinasi Populer</a></li>
                <li><a href="layanan.html">Layanan</a></li>
                <li><a href="testimoni.html">Testimoni</a></li>
                <li><a href="blog1.html">Blog</a></li>
                <li><a href="bantuankami.html" class="Bantuan Kami-btn">Bantuan Kami</a></li> 
              </ul>
              <div class="auth-buttons">
                <a href="Login.html" class="login-btn">Login</a>
                <a href="daftar khai.html" class="signup-btn">Daftar</a>
              </div>
            </nav>
          </header>

        <h1>Berikan Review Anda</h1>
        <div class="review-form">
            <label for="rating">Rating (1-5 bintang):</label>
            <div class="rating" id="rating">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
            </div>

            <label for="comment">Komentar:</label>
            <textarea id="comment" placeholder="Tulis komentar Anda di sini..." rows="5"></textarea>

            <button id="submitReview" onclick="submitReview()">Kirim Review</button>
        </div>

        <hr>

        <h2>Review Pengguna</h2>
        <div id="reviews" class="reviews-list"></div>
    </div>

    <footer>
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

    <script>
        let selectedRating = 0;
        const stars = document.querySelectorAll('.star');
        stars.forEach(star => {
            star.addEventListener('click', () => {
                selectedRating = star.getAttribute('data-value');
                updateStarSelection();
            });
        });

        function updateStarSelection() {
            stars.forEach(star => {
                if (star.getAttribute('data-value') <= selectedRating) {
                    star.classList.add('selected');
                } else {
                    star.classList.remove('selected');
                }
            });
        }

        function submitReview() {
            const comment = document.getElementById('comment').value;

            if (selectedRating === 0) {
                alert('Silakan pilih rating.');
                return;
            }

            if (comment.trim() === '') {
                alert('Komentar tidak boleh kosong.');
                return;
            }

            const reviewItem = document.createElement('div');
            reviewItem.classList.add('review-item');
            reviewItem.innerHTML = `
                <h3>Rating: ${selectedRating} Bintang</h3>
                <p>${comment}</p>
            `;

            const reviewsList = document.getElementById('reviews');
            reviewsList.appendChild(reviewItem);

            alert('Review berhasil dikirim!');

            resetForm();
        }

        function resetForm() {
            selectedRating = 0;
            document.getElementById('comment').value = '';
            updateStarSelection();
        }
    </script>
</body>
</html>
