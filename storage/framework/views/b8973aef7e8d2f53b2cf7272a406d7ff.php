<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotel Grand Pesona</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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

    <section class="about-hero">
        <div class="container">
            <h1>Hotel Grand Pesona</h1>
            <p>Tempat Outbound di daerah Bogor</p>
        </div>
    </section>

    <section class="timeline-section">
        <div class="container">
            <h2>Fasilitas Kami</h2>
            <p class="section-subtitle">Dari ruang pertemuan hingga kolam renang, kami memiliki semuanya.</p>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">Paket A</div>
                    <div class="timeline-content">
                        <h3>menginap Rp. 35.000/ per orang.  </h3>
                        <p>Fasilitas : Lap kegiatan,kolam renang,air mineral,dekomentasi,Spanduk</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">Paket B</div>
                    <div class="timeline-content">
                        <h3>PAKET MENGINAP Meeting paket Harga Rp. 450.000/ per pax. </h3>
                        <p>  harga minimal 50 orang , Fasilitas : Lap kegiatan,kolam renang,air mineral,dekomentasi,Spanduk</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">Paket C</div>
                    <div class="timeline-content">
                        <h3>PAKET one day EDUCATION AGRO WISATA harga Rp. 275.000/ per pax</h3>
                        <p> Fasilitas : Lap kegiatan,kolam renang,air mineral,dekomentasi,Spanduk dan hasil karya bisa dibawa pulang.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">Paket D</div>
                    <div class="timeline-content">
                        <h3>PAKET PAINT BALL. </h3>
                        <p>Harga Rp. 250.000 nett/per orang / Min : 30 pax Harga termasuk : Peluru 40 pcs, perlengkapan paint ball</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">Paket E</div>
                    <div class="timeline-content">
                        <h3>PAKET LDKS (menginap ditenda )</h3>
                        <p>- Harga Rp. 450.000/ pax. minimal 50 Orang.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">Paket F</div>
                    <div class="timeline-content">
                        <h3>PAKET LIVE IN “menginap dirumah warga desa ” </h3>
                        <p>Harga Rp. 550.000/ per pax. minimal 50 Orang</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="values-section">
        <div class="container">
            <h2>Nilai-Nilai Kami</h2>
            <p class="section-subtitle">Prinsip yang membentuk identitas Grand Pesona</p>

            <div class="values-grid">
                <div class="value-card">
                    <i class="fas fa-heart"></i>
                    <h3>Keramahan</h3>
                    <p>Kami menghidupkan tradisi keramahan Indonesia yang hangat dan tulus kepada setiap tamu.</p>
                </div>

                <div class="value-card">
                    <i class="fas fa-gem"></i>
                    <h3>Kualitas</h3>
                    <p>Setiap detail diperhatikan untuk memberikan pengalaman terbaik tanpa kompromi.</p>
                </div>

                <div class="value-card">
                    <i class="fas fa-history"></i>
                    <h3>Warisan</h3>
                    <p>Kami menjaga warisan budaya sambil terus berinovasi untuk masa depan.</p>
                </div>

                <div class="value-card">
                    <i class="fas fa-leaf"></i>
                    <h3>Keberlanjutan</h3>
                    <p>Kami berkomitmen pada praktik berkelanjutan untuk lingkungan dan masyarakat.</p>
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
<?php /**PATH C:\x\laravel\hotel-website\resources\views/about.blade.php ENDPATH**/ ?>