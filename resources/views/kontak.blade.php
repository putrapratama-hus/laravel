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

    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info">
                    <h2>Informasi Kontak</h2>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Alamat</h3>
                            <p>Jl. Cilotoh No.126, Lemah Duhur, Kec. Caringin, Kabupaten Bogor, Jawa Barat 16730</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Telepon</h3>
                            <p>+62 856-1870-323</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>info@grandpesona.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Jam Operasional</h3>
                            <p>Resepsionis: 24 Jam</p>
                            <p>Layanan Tamu: 06.00 - 22.00</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h2>Kirim Pesan</h2>
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Nomor Telepon">
                        </div>
                        <div class="form-group">
                            <select>
                                <option value="">Pilih Subjek</option>
                                <option value="reservation">Reservasi</option>
                                <option value="event">Acara & Meeting</option>
                                <option value="question">Pertanyaan</option>
                                <option value="feedback">Feedback</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Pesan Anda" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="container">
            <h2>Lokasi Kami</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3064.7642710416085!2d106.83448847362811!3d-6.705776493289886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c95ee9faf10f%3A0xda6c9e08ada3dc9f!2sHotel%20Grand%20Pesona!5e1!3m2!1sid!2sid!4v1749799912303!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
