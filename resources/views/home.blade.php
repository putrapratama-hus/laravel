<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Grand Pesona</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>GRAND PESONA</h1>
                <p>Luxury Hotel & Resort</p>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="{{ route('home') }}" class="active">Beranda</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('galeri') }}">Galeri</a></li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="about">
        <div class="container">
            <div class="about-text">
                <h2>Selamat Datang di Grand Pesona</h2>
                <p>Hotel Grand Pesona adalah destinasi mewah yang menggabungkan kemewahan modern dengan sentuhan tradisional. Setiap detail dirancang untuk memberikan pengalaman menginap yang tak terlupakan.</p>
                <p>Dari kamar yang luas hingga fasilitas premium, kami berkomitmen untuk memberikan pelayanan terbaik bagi tamu bisnis maupun liburan.</p>
                <div class="about-features">
                    <div class="feature">
                        <i class="fas fa-concierge-bell"></i>
                        <p>Pelayanan 24 Jam</p>
                    </div>
                    <div class="feature">
                        <i class="fas fa-wifi"></i>
                        <p>WiFi Cepat</p>
                    </div>
                    <div class="feature">
                        <i class="fas fa-parking"></i>
                        <p>Parkir Gratis</p>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="images/pondok.png" alt="Hotel Lobby">
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
