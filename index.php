<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambal Seuhah - Ledakan Rasa Pedas Autentik</title>
    <style>
        /* Global Styles */
        :root {
            --primary: #e63946;
            --secondary: #f1faee;
            --accent: #a8dadc;
            --dark: #1d3557;
            --light: #f8f9fa;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-text-size-adjust: 100%;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            width: 100%;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('images/logo1.jpg') no-repeat center center/cover;
            color: white;
            padding: 60px 0;
            text-align: center;
            min-height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .tagline {
            font-size: 1rem;
            margin-bottom: 20px;
            padding: 0 10px;
        }
        
        /* Navigation */
        nav {
            background-color: var(--dark);
            position: sticky;
            top: 0;
            z-index: 100;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 10px 0;
            flex-wrap: nowrap;
            white-space: nowrap;
            min-width: 100%;
        }
        
        nav ul li {
            margin: 0 8px;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            font-size: 0.85rem;
            padding: 5px 8px;
            display: block;
        }
        
        /* Main Content */
        section {
            padding: 30px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 20px;
            color: var(--dark);
            font-size: 1.5rem;
            position: relative;
            padding: 0 10px;
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: var(--primary);
            margin: 8px auto;
        }
        
        /* About Section */
        .about-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        
        .about-text {
            width: 100%;
            padding: 0 10px;
            font-size: 0.95rem;
        }
        
        .about-image {
            width: 100%;
            max-width: 100%;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        /* Menu Section */
        .menu-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }
        
        .menu-item {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .menu-image {
            height: 180px;
            overflow: hidden;
        }
        
        .menu-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .menu-details {
            padding: 12px;
        }
        
        .menu-title {
            font-size: 1.1rem;
            margin-bottom: 6px;
        }
        
        .menu-description {
            color: #666;
            margin-bottom: 8px;
            font-size: 0.85rem;
        }
        
        .menu-price {
            font-weight: bold;
            color: var(--primary);
            font-size: 1rem;
        }
        
        /* Why Us Section */
        .features {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
            margin-top: 20px;
        }
        
        .feature {
            text-align: center;
            padding: 15px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        
        .feature-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        .feature-title {
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        
        .feature p {
            font-size: 0.85rem;
        }
        
        /* Promo Section */
        .promo-banner {
            background: linear-gradient(135deg, var(--primary), #c1121f);
            color: white;
            padding: 20px 15px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .promo-title {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }
        
        .promo-description {
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        
        .cta-button {
            display: inline-block;
            background-color: white;
            color: var(--primary);
            padding: 8px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.9rem;
            border: 2px solid white;
        }
        
        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }
        
        .contact-info {
            padding: 15px;
        }
        
        .contact-title {
            font-size: 1.2rem;
            margin-bottom: 12px;
        }
        
        .contact-item {
            margin-bottom: 10px;
            font-size: 0.9rem;
        }
        
        .contact-icon {
            margin-right: 8px;
            font-size: 0.9rem;
        }
        
        .contact-form {
            padding: 15px;
        }
        
        .form-group {
            margin-bottom: 12px;
        }
        
        .form-group label {
            font-size: 0.9rem;
        }
        
        .form-group input,
        .form-group textarea {
            padding: 7px 10px;
            font-size: 0.9rem;
        }
        
        .submit-button {
            padding: 8px 20px;
            font-size: 0.9rem;
        }
        
        /* Footer */
        footer {
            padding: 20px 0 10px;
        }
        
        .social-links {
            margin-bottom: 15px;
            flex-direction: column;
            gap: 10px;
        }
        
        .social-links a {
            font-size: 0.9rem;
            justify-content: center;
        }
        
        .copyright {
            font-size: 0.75rem;
        }
        
        /* Responsive Adjustments */
        @media (min-width: 400px) {
            .logo {
                font-size: 2rem;
            }
            
            .tagline {
                font-size: 1.1rem;
            }
            
            nav ul li a {
                font-size: 0.9rem;
            }
        }
        
        @media (min-width: 576px) {
            .menu-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .features {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .social-links {
                flex-direction: row;
                flex-wrap: wrap;
            }
        }
        
        @media (min-width: 768px) {
            header {
                min-height: 60vh;
                padding: 80px 0;
            }
            
            .logo {
                font-size: 2.5rem;
            }
            
            .tagline {
                font-size: 1.3rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .about-content {
                flex-direction: row;
            }
            
            .menu-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .features {
                grid-template-columns: repeat(4, 1fr);
            }
            
            .contact-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (min-width: 992px) {
            .menu-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        /* Fix for very small devices */
        @media (max-width: 360px) {
            .logo {
                font-size: 1.6rem;
            }
            
            .tagline {
                font-size: 0.9rem;
            }
            
            nav ul li a {
                font-size: 0.8rem;
                padding: 5px;
            }
            
            .section-title {
                font-size: 1.3rem;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1 class="logo">SAMBAL SEUHAH</h1>
            <p class="tagline">Nikmati Ledakan Rasa Pedas Autentik dari Dapur Kami!</p>
        </div>
    </header>
    
    <!-- Navigation -->
    <nav>
        <div class="container">
            <ul>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#menu">Menu Sambal</a></li>
                <li><a href="#why-us">Keunggulan</a></li>
                <li><a href="#promo">Promo</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- About Section -->
    <section id="about" class="section-about">
        <div class="container">
            <h2 class="section-title">Tentang Sambal Seuhah</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Sambal Seuhah adalah UMKM lokal yang berdedikasi untuk menghadirkan pengalaman kuliner pedas yang autentik dan menggugah selera. Setiap pilihan sambal kami dibuat dengan bahan-bahan segar dan racikan bumbu rahasia yang menjadikan cita rasa pedasnya nendang, gurih, dan bikin ketagihan.</p>
                    <p>Kami percaya bahwa sambal bukan hanya sekadar pelengkap makanan, tapi juga bisa menjadi bintang utama yang memeriahkan setiap hidangan. Itulah mengapa kami menyajikan berbagai varian sambal dengan karakter rasa yang unik untuk memenuhi selera pecinta pedas dari yang sedang hingga ekstrem.</p>
                </div>
                <div class="about-image">
                    <img src="images/logo.jpg" alt="Sambal Seuhah">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Menu Section -->
    <section id="menu" class="section-menu">
        <div class="container">
            <h2 class="section-title">Pilihan Sambal Eksklusif</h2>
            <div class="menu-grid">
                <!-- Menu Items (same as before) -->
                <div class="menu-item">
                    <div class="menu-image">
                        <img src="images/original.jpg" alt="Sambal Seuhah Original">
                    </div>
                    <div class="menu-details">
                        <h3 class="menu-title">Sambal Seuhah Original</h3>
                        <p class="menu-description">Pedasnya pas, cocok untuk semua kalangan dengan cita rasa yang seimbang antara pedas, gurih, dan sedikit manis.</p>
                        <p class="menu-price">Rp 25.000/botol</p>
                    </div>
                </div>
                
                <div class="menu-item">
                    <div class="menu-image">
                        <img src="images/kemangi.jpg" alt="Sambal Hijau Kemangi">
                    </div>
                    <div class="menu-details">
                        <h3 class="menu-title">Sambal Hijau Kemangi</h3>
                        <p class="menu-description">Kombinasi segar cabai hijau dan aroma kemangi yang menggoda, memberikan sensasi pedas yang menyegarkan.</p>
                        <p class="menu-price">Rp 28.000/botol</p>
                    </div>
                </div>
                
                <div class="menu-item">
                    <div class="menu-image">
                        <img src="images/bawang.jpg" alt="Sambal Bawang Super Pedas">
                    </div>
                    <div class="menu-details">
                        <h3 class="menu-title">Sambal Bawang Super Pedas</h3>
                        <p class="menu-description">Untuk pecinta level pedas ekstrem, dijamin bikin keringat mengucur! Dibuat dari cabai rawit pilihan.</p>
                        <p class="menu-price">Rp 30.000/botol</p>
                    </div>
                </div>
                
                <div class="menu-item">
                    <div class="menu-image">
                        <img src="images/terasi.jpg" alt="Sambal Terasi Bakar">
                    </div>
                    <div class="menu-details">
                        <h3 class="menu-title">Sambal Terasi Bakar</h3>
                        <p class="menu-description">Aroma terasi panggang yang harum, pedasnya bikin nagih. Cocok untuk teman makan lalapan dan ikan bakar.</p>
                        <p class="menu-price">Rp 27.000/botol</p>
                    </div>
                </div>
                
                <div class="menu-item">
                    <div class="menu-image">
                        <img src="images/mangga.jpg" alt="Sambal Mangga Muda">
                    </div>
                    <div class="menu-details">
                        <h3 class="menu-title">Sambal Mangga Muda</h3>
                        <p class="menu-description">Perpaduan pedas dan asam segar, cocok buat teman makan gorengan atau ikan goreng. Rasa unik yang menyegarkan.</p>
                        <p class="menu-price">Rp 29.000/botol</p>
                    </div>
                </div>
                
                <div class="menu-item">
                    <div class="menu-image">
                        <img src="images/manado.jpg" alt="Sambal Dabu-Dabu Manado">
                    </div>
                    <div class="menu-details">
                        <h3 class="menu-title">Sambal Dabu-Dabu Manado</h3>
                        <p class="menu-description">Pedas segar dengan potongan tomat, bawang, dan jeruk limau khas Manado yang menggugah selera.</p>
                        <p class="menu-price">Rp 32.000/botol</p>
                    </div>
                </div>
                
                <div class="menu-item">
                    <div class="menu-image">
                        <img src="images/kacang.jpg" alt="Sambal Kacang Pedas">
                    </div>
                    <div class="menu-details">
                        <h3 class="menu-title">Sambal Kacang Pedas</h3>
                        <p class="menu-description">Rasa gurih kacang dengan sentuhan pedas yang pas, cocok untuk cocolan gorengan atau siraman pecel.</p>
                        <p class="menu-price">Rp 26.000/botol</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Us Section -->
    <section id="why-us" class="section-why">
        <div class="container">
            <h2 class="section-title">Kenapa Pilih Sambal Seuhah?</h2>
            <div class="features">
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="feature-title">100% Bahan Alami</h3>
                    <p>Dibuat dari bahan-bahan segar pilihan tanpa pengawet atau bahan kimia tambahan.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-fire-alt"></i>
                    </div>
                    <h3 class="feature-title">Level Pedas Bervariasi</h3>
                    <p>Kami menyediakan level pedas dari Mild, Medium, hingga Extra Hot sesuai selera Anda.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <h3 class="feature-title">Packing Higienis</h3>
                    <p>Dikemas dengan standar kebersihan tinggi dan aman untuk dikirim ke seluruh Indonesia.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-tags"></i>
                    </div>
                    <h3 class="feature-title">Harga Terjangkau</h3>
                    <p>Rasa premium dengan harga yang ramah di kantong. Kualitas terbaik untuk pelanggan.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Promo Section -->
    <section id="promo" class="section-promo">
        <div class="container">
            <div class="promo-banner">
                <h2 class="promo-title">PROMO SPESIAL HARI INI!</h2>
                <p class="promo-description">🔥 Pesan 3 botol, gratis 1 sachet tester! 🔥<br>
                🚚 Gratis ongkir untuk pembelian di atas Rp100.000 (S&K berlaku)</p>
                <a href="#contact" class="cta-button">PESAN SEKARANG</a>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="section-contact">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3 class="contact-title">Info Kontak</h3>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <p>Jl. Urug, Kota Tasikmalaya, Jawa Barat</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <p>+62 819-1020-7890</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p>info@sambalseuhah.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <p>Buka setiap hari: 10.00 - 20.00 WIB</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3 class="contact-title">Kirim Pesan</h3>
                    <form id="whatsappForm">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">No. WhatsApp</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        
                        <button type="submit" class="submit-button">KIRIM PESAN</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i> Sambalseuhah07</a>
                <a href="#"><i class="fab fa-facebook"></i> Sambalseuhah07</a>
                <a href="#"><i class="fab fa-whatsapp"></i> +62 819-1020-7238</a>
                <a href="#"><i class="fab fa-shopify"></i> SambalSeuhah07</a>
            </div>
            
            <p class="copyright">© 2025 Sambal Seuhah Mantap</p>
        </div>
    </footer>

    <script>
        document.getElementById('whatsappForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const ownerNumber = '6281910207238';
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;
            
            const whatsappMessage = `Halo, saya ${name}.\n\nEmail: ${email}\nNo. WhatsApp: ${phone}\n\nPesan:\n${message}`;
            const encodedMessage = encodeURIComponent(whatsappMessage);
            
            window.open(`https://wa.me/${ownerNumber}?text=${encodedMessage}`, '_blank');
        });
    </script>
</body>
</html>
