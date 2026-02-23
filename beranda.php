<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
:root {
    --green-deep: #1a3a2a;
    --green-mid: #2d6a4f;
    --green-accent: #52b788;
    --green-light: #b7e4c7;
    --cream: #f8f5f0;
    --gold: #d4a853;
    --text-dark: #1c1c1c;
    --text-mid: #4a4a4a;
    --white: #ffffff;
}

body {
    background-color: var(--cream);
    color: var(--text-dark);
}
.page-content {
    font-family: 'DM Sans', sans-serif;
}
/* ========== HERO ========== */
.hero-wrapper {
    position: relative;
    min-height: 88vh;
    background: var(--green-deep);
    overflow: hidden;
    display: flex;
    align-items: center;
}

.hero-bg-circles {
    position: absolute;
    inset: 0;
    pointer-events: none;
}

.hero-bg-circles span {
    position: absolute;
    border-radius: 50%;
    opacity: 0.07;
    background: var(--green-accent);
}

.hero-bg-circles span:nth-child(1) {
    width: 600px; height: 600px;
    top: -150px; right: -100px;
    animation: float1 8s ease-in-out infinite;
}
.hero-bg-circles span:nth-child(2) {
    width: 350px; height: 350px;
    bottom: -80px; left: 10%;
    opacity: 0.05;
    animation: float2 10s ease-in-out infinite;
}
.hero-bg-circles span:nth-child(3) {
    width: 180px; height: 180px;
    top: 20%; left: 35%;
    opacity: 0.04;
    animation: float1 12s ease-in-out infinite reverse;
}

@keyframes float1 {
    0%, 100% { transform: translateY(0px) scale(1); }
    50% { transform: translateY(-30px) scale(1.05); }
}
@keyframes float2 {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(20px); }
}

.hero-content {
    position: relative;
    z-index: 2;
    padding: 6rem 0 4rem;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(82, 183, 136, 0.15);
    border: 1px solid rgba(82, 183, 136, 0.35);
    color: var(--green-accent);
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 100px;
    margin-bottom: 1.5rem;
    animation: fadeInDown 0.7s ease forwards;
}

.hero-badge::before {
    content: '';
    width: 7px; height: 7px;
    background: var(--green-accent);
    border-radius: 50%;
    animation: pulse 2s ease infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(1.4); }
}

.hero-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(3rem, 6vw, 5.5rem);
    font-weight: 900;
    line-height: 1.05;
    color: var(--white);
    margin-bottom: 1.5rem;
    animation: fadeInUp 0.8s 0.2s ease both;
}

.hero-title .accent {
    color: var(--green-accent);
    display: block;
}

.hero-desc {
    font-size: 1.1rem;
    color: rgba(255,255,255,0.65);
    font-weight: 300;
    max-width: 480px;
    line-height: 1.8;
    margin-bottom: 2.5rem;
    animation: fadeInUp 0.8s 0.35s ease both;
}

.hero-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    animation: fadeInUp 0.8s 0.5s ease both;
}

.btn-hero-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--green-accent);
    color: var(--green-deep);
    font-weight: 700;
    font-size: 0.95rem;
    padding: 14px 32px;
    border-radius: 100px;
    text-decoration: none;
    transition: all 0.3s ease;
    letter-spacing: 0.02em;
    box-shadow: 0 8px 30px rgba(82, 183, 136, 0.35);
}

.btn-hero-primary:hover {
    background: var(--white);
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(82, 183, 136, 0.45);
    color: var(--green-deep);
}

.btn-hero-primary svg {
    transition: transform 0.3s ease;
}
.btn-hero-primary:hover svg {
    transform: translateX(4px);
}

.btn-hero-secondary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: rgba(255,255,255,0.7);
    font-weight: 500;
    font-size: 0.95rem;
    padding: 14px 24px;
    border-radius: 100px;
    text-decoration: none;
    border: 1px solid rgba(255,255,255,0.2);
    transition: all 0.3s ease;
}

.btn-hero-secondary:hover {
    border-color: rgba(255,255,255,0.5);
    color: var(--white);
    background: rgba(255,255,255,0.08);
}

.hero-stats {
    display: flex;
    gap: 2.5rem;
    margin-top: 4rem;
    padding-top: 2rem;
    border-top: 1px solid rgba(255,255,255,0.1);
    animation: fadeInUp 0.8s 0.65s ease both;
}

.stat-item .stat-num {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: var(--white);
    line-height: 1;
}

.stat-item .stat-label {
    font-size: 0.8rem;
    color: rgba(255,255,255,0.45);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-top: 4px;
}

/* Hero image side */
.hero-img-side {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: fadeIn 1s 0.4s ease both;
}

.hero-img-ring {
    position: absolute;
    width: 420px;
    height: 420px;
    border-radius: 50%;
    border: 1px solid rgba(82, 183, 136, 0.2);
    animation: spin 30s linear infinite;
}

.hero-img-ring::before {
    content: '';
    position: absolute;
    top: -4px; left: 50%;
    width: 8px; height: 8px;
    background: var(--green-accent);
    border-radius: 50%;
}

@keyframes spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.hero-card-float {
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 20px;
    padding: 1rem 1.5rem;
    color: white;
    position: absolute;
}

.hero-card-float.card-delivery {
    bottom: 60px;
    left: -20px;
    animation: float2 5s ease-in-out infinite;
}

.hero-card-float.card-rating {
    top: 30px;
    right: -20px;
    animation: float1 6s ease-in-out infinite;
}

.hero-card-float .card-label {
    font-size: 0.7rem;
    opacity: 0.6;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.hero-card-float .card-val {
    font-weight: 700;
    font-size: 1rem;
    margin-top: 2px;
}

.hero-main-img {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid rgba(82, 183, 136, 0.3);
    position: relative;
    z-index: 2;
}

/* fallback jika tidak ada gambar hero */
.hero-icon-center {
    width: 280px;
    height: 280px;
    border-radius: 50%;
    background: rgba(82, 183, 136, 0.1);
    border: 2px solid rgba(82, 183, 136, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 2;
}

.hero-icon-center svg {
    opacity: 0.6;
}

/* ========== FEATURES STRIP ========== */
.features-strip {
    background: var(--white);
    padding: 1.5rem 0;
    border-bottom: 1px solid rgba(0,0,0,0.05);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 0 2rem;
    border-right: 1px solid rgba(0,0,0,0.07);
}

.feature-item:last-child { border-right: none; }

.feature-icon {
    width: 42px;
    height: 42px;
    background: var(--green-light);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: var(--green-mid);
}

.feature-text .ft-title {
    font-weight: 600;
    font-size: 0.88rem;
    color: var(--text-dark);
    line-height: 1.2;
}

.feature-text .ft-sub {
    font-size: 0.75rem;
    color: var(--text-mid);
    margin-top: 2px;
}

/* ========== SECTION HEADER ========== */
.section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.section-tag {
    display: inline-block;
    background: var(--green-light);
    color: var(--green-mid);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    padding: 5px 14px;
    border-radius: 100px;
    margin-bottom: 0.75rem;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.section-sub {
    color: var(--text-mid);
    font-size: 1rem;
    font-weight: 300;
}

/* ========== PRODUCT CARDS ========== */
.products-section {
    padding: 5rem 0;
    background: var(--cream);
}

.product-card-new {
    background: var(--white);
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    box-shadow: 0 2px 20px rgba(0,0,0,0.05);
    height: 100%;
    position: relative;
}

.product-card-new:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(45, 106, 79, 0.15);
}

.product-img-wrap {
    position: relative;
    overflow: hidden;
    background: #f3f3f1;
    height: 220px;
}

.product-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.product-card-new:hover .product-img-wrap img {
    transform: scale(1.08);
}

.product-badge-new {
    position: absolute;
    top: 12px;
    left: 12px;
    background: var(--green-deep);
    color: white;
    font-size: 0.7rem;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 100px;
    text-transform: uppercase;
    letter-spacing: 0.06em;
}

.product-card-body {
    padding: 1.25rem 1.4rem;
}

.product-name {
    font-family: 'Playfair Display', serif;
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.25rem;
}

.product-price {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--green-mid);
}

.product-price-label {
    font-size: 0.72rem;
    color: var(--text-mid);
    font-weight: 400;
    margin-bottom: 0.2rem;
}

.btn-card-action {
    display: block;
    width: 100%;
    background: var(--green-deep);
    color: var(--white);
    border: none;
    border-radius: 12px;
    padding: 10px;
    font-weight: 600;
    font-size: 0.88rem;
    text-align: center;
    text-decoration: none;
    transition: all 0.3s ease;
    margin-top: 1rem;
    cursor: pointer;
}

.btn-card-action:hover {
    background: var(--green-accent);
    color: var(--green-deep);
    transform: scale(1.02);
}

/* ========== CTA SECTION ========== */
.cta-section {
    background: var(--green-deep);
    padding: 5rem 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 50% 0%, rgba(82,183,136,0.15) 0%, transparent 70%);
}

.cta-section .section-title { color: var(--white); }
.cta-section .section-sub { color: rgba(255,255,255,0.55); }

@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Responsive */
@media (max-width: 768px) {
    .hero-img-side { display: none; }
    .hero-stats { gap: 1.5rem; }
    .feature-item { border-right: none; border-bottom: 1px solid rgba(0,0,0,0.07); }
    .hero-title { font-size: 2.8rem; }
}
</style>

<!-- ===== HERO ===== -->
<div class="hero-wrapper">
    <div class="hero-bg-circles">
        <span></span><span></span><span></span>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="hero-badge">
                        <span>🌿 Kebutuhan Pokok Segar & Berkualitas</span>
                    </div>
                    <h1 class="hero-title">
                        Belanja Cerdas,
                        <span class="accent">Hidup Hemat.</span>
                    </h1>
                    <p class="hero-desc">
                        Dapatkan berbagai kebutuhan pokok sehari-hari dengan kualitas terbaik, harga terjangkau, dan pengiriman cepat langsung ke pintu rumah Anda.
                    </p>
                    <div class="hero-actions">
                        <a href="index.php?page=produk" class="btn-hero-primary">
                            Belanja Sekarang
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                        <a href="#produk-terlaris" class="btn-hero-secondary">
                            Lihat Produk Terlaris
                        </a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-num">500+</div>
                            <div class="stat-label">Produk Tersedia</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-num">2K+</div>
                            <div class="stat-label">Pelanggan Aktif</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-num">4.9★</div>
                            <div class="stat-label">Rating Toko</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-flex">
                <div class="hero-img-side w-100 justify-content-center" style="height: 500px;">
                    <div class="hero-img-ring"></div>

                    <div class="hero-icon-center">
                        <svg width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="#52b788" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
                            <line x1="3" y1="6" x2="21" y2="6"/>
                            <path d="M16 10a4 4 0 01-8 0"/>
                        </svg>
                    </div>

                    <div class="hero-card-float card-delivery">
                        <div class="card-label">🚚 Pengiriman</div>
                        <div class="card-val">Gratis ke seluruh kota</div>
                    </div>

                    <div class="hero-card-float card-rating">
                        <div class="card-label">⭐ Terpercaya</div>
                        <div class="card-val">+2.000 ulasan bintang 5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== FEATURES STRIP ===== -->
<div class="features-strip">
    <div class="container">
        <div class="row g-0">
            <div class="col-6 col-md-3">
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8"/></svg>
                    </div>
                    <div class="feature-text">
                        <div class="ft-title">Gratis Ongkir</div>
                        <div class="ft-sub">Min. belanja 50rb</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div class="feature-text">
                        <div class="ft-title">Pengiriman Cepat</div>
                        <div class="ft-sub">Sampai dalam 2 jam</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <div class="feature-text">
                        <div class="ft-title">Produk Terjamin</div>
                        <div class="ft-sub">Kualitas terbaik</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <div class="feature-text">
                        <div class="ft-title">Return Mudah</div>
                        <div class="ft-sub">Garansi 100% refund</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== PRODUK TERLARIS ===== -->
<div class="products-section" id="produk-terlaris">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">🔥 Terlaris</span>
            <h2 class="section-title">Produk Pilihan Minggu Ini</h2>
            <p class="section-sub">Favorit pelanggan dengan kualitas terjamin & harga terbaik</p>
        </div>

        <div class="row g-4">
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM produk LIMIT 3");
            while($data = mysqli_fetch_array($query)){
            ?>
            <div class="col-md-4">
                <div class="product-card-new">
                    <div class="product-img-wrap">
                        <img src="assets/img/<?php echo $data['foto_produk']; ?>" alt="<?php echo $data['nama_produk']; ?>">
                        <div class="product-badge-new">Terlaris</div>
                    </div>
                    <div class="product-card-body">
                        <div class="product-price-label">Harga satuan</div>
                        <div class="product-name"><?php echo $data['nama_produk']; ?></div>
                        <div class="product-price">Rp <?php echo number_format($data['harga_produk']); ?></div>
                        <a href="index.php?page=produk" class="btn-card-action">Lihat Detail →</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <div class="text-center mt-5">
            <a href="index.php?page=produk" class="btn-hero-primary" style="background: var(--green-deep); color: white; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 8px 25px rgba(26,58,42,0.25);">
                Lihat Semua Produk
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</div>

<!-- ===== CTA ===== -->
<div class="cta-section">
    <div class="container position-relative">
        <span class="section-tag">✨ Bergabung Sekarang</span>
        <h2 class="section-title mt-2">Daftar & Dapatkan Promo Menarik</h2>
        <p class="section-sub mb-4">Nikmati penawaran eksklusif untuk member baru. Hemat lebih banyak setiap belanja!</p>
        <a href="index.php?page=daftar_pembeli" class="btn-hero-primary" style="background: var(--green-accent); box-shadow: 0 8px 30px rgba(82,183,136,0.4);">
            Daftar Gratis Sekarang
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</div>