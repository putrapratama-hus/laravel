<link rel="stylesheet" href="css/style.css">
<header class="header">
    <div class="container">
        <div class="logo">
            <h1>GRAND PESONA</h1>
            <p>Luxury Hotel</p>
        </div>
        <nav class="navbar">
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>" class="active">Beranda</a></li>
                    <li><a href="<?php echo e(route('fasilitas')); ?>">Fasilitas</a></li>
                    <li><a href="<?php echo e(route('galeri')); ?>">Galeri</a></li>
                    <li><a href="<?php echo e(route('kontak')); ?>">Kontak</a></li>
                    <li class="book-now"><a href="#booking">Pesan Sekarang</a></li>
                </ul>
            </nav>
    </div>
</header>

<section class="facilities-main">
    <div class="container">
        <div class="section-title">
            <h2>Fasilitas Unggulan</h2>
            <p>Pengalaman lengkap untuk kenyamanan Anda</p>
        </div>
        <div class="facility-grid">
            <div class="facility-card large">
                <img src="" alt="Kolam Renang">
                <div class="facility-info">
                    <h3>Infinity Pool</h3>
                    <p>Kolam renang dengan pemandangan kota dan pelayanan poolside</p>
                    <ul>
                        <li><i class="fas fa-clock"></i> 06.00 - 22.00</li>
                        <li><i class="fas fa-umbrella-beach"></i> Pool Bar tersedia</li>
                    </ul>
                </div>
            </div>
            <div class="facility-card">
                <img src="" alt="Spa">
                <div class="facility-info">
                    <h3>Spa & Wellness</h3>
                    <p>Perawatan spa profesional untuk relaksasi total</p>
                </div>
            </div>
            <div class="facility-card">
                <img src="" alt="Gym">
                <div class="facility-info">
                    <h3>Fitness Center</h3>
                    <p>Gym lengkap dengan peralatan modern</p>
                </div>
            </div>
            <div class="facility-card">
                <img src="" alt="Restoran">
                <div class="facility-info">
                    <h3>Restoran Premium</h3>
                    <p>Hidangan internasional dan lokal terbaik</p>
                </div>
            </div>
            <div class="facility-card">
                <img src="<?php echo e(asset('')); ?>" alt="Meeting Room">
                <div class="facility-info">
                    <h3>Ruang Meeting</h3>
                    <p>Fasilitas lengkap untuk acara bisnis</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="other-facilities">
    <div class="container">
        <div class="section-title">
            <h2>Fasilitas Lainnya</h2>
        </div>
        <div class="facility-list">
            <div class="facility-item">
                <i class="fas fa-wifi"></i>
                <h3>WiFi Kecepatan Tinggi</h3>
                <p>Gratis di seluruh area hotel</p>
            </div>
            <div class="facility-item">
                <i class="fas fa-parking"></i>
                <h3>Parkir Valet</h3>
                <p>Parkir aman dengan layanan valet</p>
            </div>
            <div class="facility-item">
                <i class="fas fa-concierge-bell"></i>
                <h3>Layanan Kamar 24 Jam</h3>
                <p>Kenyamanan tanpa batas</p>
            </div>
            <div class="facility-item">
                <i class="fas fa-tshirt"></i>
                <h3>Laundry & Dry Cleaning</h3>
                <p>Layanan harian</p>
            </div>
            <div class="facility-item">
                <i class="fas fa-suitcase-rolling"></i>
                <h3>Penyimpanan Bagasi</h3>
                <p>Sebelum check-in/setelah check-out</p>
            </div>
            <div class="facility-item">
                <i class="fas fa-exchange-alt"></i>
                <h3>Money Changer</h3>
                <p>Layanan penukaran mata uang</p>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
        <div class="container">
            <div class="footer-section">
                <h3>Grand Pesona</h3>
                <p>Hotel mewah dengan pelayanan terbaik untuk pengalaman menginap tak terlupakan.</p>
                <div class="social-media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Link Cepat</h3>
                <ul>
                    <li><a href="home.html">Beranda</a></li>
                    <li><a href="fasilitas.html">Fasilitas</a></li>
                    <li><a href="galeri.html">Galeri</a></li>
                    <li><a href="kontak.html">Kontak</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Kontak</h3>
                <p><i class="fas fa-map-marker-alt"></i>Jl. Cilotoh No.126, Lemah Duhur, Kec. Caringin, Kabupaten Bogor, Jawa Barat 16730</p>
                <p><i class="fas fa-phone"></i> +62 856-1870-323</p>
                <p><i class="fas fa-envelope"></i> info@grandpesona.com</p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 Hotel Grand Pesona.</p>
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\x\laravel\hotel-website\resources\views/fasilitas.blade.php ENDPATH**/ ?>