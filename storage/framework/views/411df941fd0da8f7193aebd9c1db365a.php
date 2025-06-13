<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotel Grand Pesona</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <h1>GRAND PESONA</h1>
            <p>Luxury Hotel</p>
        </div>
        <nav class="navbar">
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>" class="active">Beranda</a></li>
                    <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                    <li><a href="<?php echo e(route('galeri')); ?>">Galeri</a></li>
                    <li><a href="<?php echo e(route('kontak')); ?>">Kontak</a></li>
                </ul>
            </nav>
    </div>
</header>

<section class="facilities-main">
    <div class="container">
        <div class="section-title">
            <h2>Galeri</h2>
            <p>Pengalaman lengkap untuk kenyamanan Anda</p>
        </div>
        <div class="facility-grid">
            <div class="facility-card large">
                <img src="<?php echo e(asset('images/kolamrenang.png')); ?>" alt="Kolam Renang">
                <div class="facility-info">
                    <h3>Kolam Renang</h3>
                    <p>tempat bersantai dan menikmati suasana</p>
                </div>
            </div>
            <div class="facility-card">
                <img src="<?php echo e(asset('images/kamar.png')); ?>" alt="Kamar">
                <div class="facility-info">
                    <h3>Kamar</h3>
                    <p>tempat istirahat yang nyaman dan tenang</p>
                </div>
            </div>
            <div class="facility-card">
                <img src="<?php echo e(asset('images/meeting.png')); ?>" alt="Meeting Room">
                <div class="facility-info">
                    <h3>Ruang Meeting</h3>
                    <p>Fasilitas lengkap untuk acara bisnis</p>
                </div>
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
<?php /**PATH C:\x\laravel\hotel-website\resources\views/galeri.blade.php ENDPATH**/ ?>