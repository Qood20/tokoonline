<!-- Google Fonts (jika belum ada di header) -->
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
/* ===== PAGE HEADER ===== */
.page-header-produk {
    background: var(--green-deep);
    padding: 3.5rem 0 2.5rem;
    position: relative;
    overflow: hidden;
}

.page-header-produk::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 80% 50%, rgba(82,183,136,0.12) 0%, transparent 60%);
}

.page-header-produk .header-tag {
    display: inline-block;
    background: rgba(82,183,136,0.15);
    color: var(--green-accent);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    padding: 5px 14px;
    border-radius: 100px;
    border: 1px solid rgba(82,183,136,0.3);
    margin-bottom: 0.75rem;
}

.page-header-produk h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--white);
    margin: 0;
}

.page-header-produk p {
    color: rgba(255,255,255,0.5);
    font-size: 0.95rem;
    margin-top: 0.4rem;
    font-weight: 300;
}

/* ===== FILTER BAR ===== */
.filter-bar {
    background: var(--white);
    padding: 1rem 0;
    border-bottom: 1px solid rgba(0,0,0,0.06);
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: 0 2px 12px rgba(0,0,0,0.05);
}

.filter-bar input.search-input {
    border: 1.5px solid rgba(0,0,0,0.1);
    border-radius: 100px;
    padding: 9px 20px 9px 44px;
    font-size: 0.9rem;
    outline: none;
    transition: border-color 0.2s;
    width: 100%;
    max-width: 380px;
    background: var(--cream);
    font-family: 'DM Sans', sans-serif;
}

.filter-bar input.search-input:focus {
    border-color: var(--green-accent);
    background: white;
}

.search-wrap {
    position: relative;
    display: inline-block;
}

.search-wrap svg {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #aaa;
    pointer-events: none;
}

.results-count {
    font-size: 0.88rem;
    color: var(--text-mid);
}

.results-count strong {
    color: var(--green-mid);
    font-weight: 700;
}

/* ===== PRODUCTS GRID ===== */
.products-page-section {
    padding: 3rem 0 5rem;
}

.product-grid-card {
    background: var(--white);
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    box-shadow: 0 2px 16px rgba(0,0,0,0.05);
    height: 100%;
    position: relative;
    display: flex;
    flex-direction: column;
}

.product-grid-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 45px rgba(45,106,79,0.15);
}

.pgc-img-wrap {
    position: relative;
    overflow: hidden;
    background: #f2f2ef;
    height: 200px;
}

.pgc-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.product-grid-card:hover .pgc-img-wrap img {
    transform: scale(1.07);
}

.pgc-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 0.68rem;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 100px;
    text-transform: uppercase;
    letter-spacing: 0.06em;
}

.pgc-badge.badge-stok {
    background: var(--green-deep);
    color: white;
}

.pgc-body {
    padding: 1.1rem 1.2rem 0.6rem;
    flex: 1;
}

.pgc-name {
    font-family: 'Playfair Display', serif;
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.3rem;
    line-height: 1.3;
}

.pgc-desc {
    font-size: 0.78rem;
    color: var(--text-mid);
    font-weight: 300;
    line-height: 1.5;
    margin-bottom: 0.75rem;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.pgc-price-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 0.5rem;
}

.pgc-price {
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--green-mid);
}

.pgc-price-label {
    font-size: 0.7rem;
    color: var(--text-mid);
    font-weight: 400;
}

/* ===== CART FORM STYLED ===== */
.pgc-footer {
    padding: 0.75rem 1.2rem 1.2rem;
    border-top: 1px solid rgba(0,0,0,0.05);
    margin-top: 0.5rem;
}

.pgc-cart-form .input-row {
    display: flex;
    gap: 8px;
    align-items: stretch;
}

.pgc-qty-input {
    width: 70px;
    border: 1.5px solid rgba(0,0,0,0.1);
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 0.9rem;
    font-family: 'DM Sans', sans-serif;
    font-weight: 600;
    text-align: center;
    outline: none;
    transition: border-color 0.2s;
    background: var(--cream);
}

.pgc-qty-input:focus {
    border-color: var(--green-accent);
    background: white;
}

.pgc-add-btn {
    flex: 1;
    background: var(--green-deep);
    color: var(--white);
    border: none;
    border-radius: 10px;
    font-size: 0.85rem;
    font-weight: 600;
    font-family: 'DM Sans', sans-serif;
    cursor: pointer;
    transition: all 0.25s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    padding: 0 14px;
    letter-spacing: 0.02em;
}

.pgc-add-btn:hover {
    background: var(--green-accent);
    color: var(--green-deep);
    transform: scale(1.03);
}

/* ===== EMPTY STATE ===== */
.empty-state {
    text-align: center;
    padding: 5rem 2rem;
    color: var(--text-mid);
}

.empty-state svg {
    opacity: 0.3;
    margin-bottom: 1rem;
}

.empty-state h4 {
    font-family: 'Playfair Display', serif;
    color: var(--text-dark);
}

/* ===== ANIMATIONS ===== */
.product-grid-card {
    animation: cardIn 0.5s ease both;
}

@keyframes cardIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* stagger via nth-child */
.col:nth-child(1) .product-grid-card { animation-delay: 0.05s; }
.col:nth-child(2) .product-grid-card { animation-delay: 0.1s; }
.col:nth-child(3) .product-grid-card { animation-delay: 0.15s; }
.col:nth-child(4) .product-grid-card { animation-delay: 0.2s; }
.col:nth-child(5) .product-grid-card { animation-delay: 0.25s; }
.col:nth-child(6) .product-grid-card { animation-delay: 0.3s; }
.col:nth-child(7) .product-grid-card { animation-delay: 0.35s; }
.col:nth-child(8) .product-grid-card { animation-delay: 0.4s; }

@media (max-width: 576px) {
    .filter-bar input.search-input { max-width: 100%; }
}
</style>

<!-- ===== PAGE HEADER ===== -->
<div class="page-header-produk">
    <div class="container position-relative">
        <div class="header-tag">🛒 Katalog Lengkap</div>
        <h1>Semua Produk</h1>
        <p>Temukan berbagai kebutuhan pokok terlengkap dengan harga terbaik</p>
    </div>
</div>

<!-- ===== FILTER BAR ===== -->
<div class="filter-bar">
    <div class="container d-flex align-items-center justify-content-between flex-wrap gap-2">
        <div class="search-wrap">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            <input type="text" class="search-input" placeholder="Cari produk..." id="searchInput" onkeyup="filterProducts()">
        </div>
        <div class="results-count" id="resultsCount">
            Menampilkan <strong id="countNum">-</strong> produk
        </div>
    </div>
</div>

<!-- ===== PRODUCTS ===== -->
<div class="products-page-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4" id="productsGrid">
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM produk");
            $total = 0;
            while($data = mysqli_fetch_array($query)){
                $total++;
            ?>
            <div class="col product-item" data-name="<?php echo strtolower($data['nama_produk']); ?>">
                <div class="product-grid-card">
                    <div class="pgc-img-wrap">
                        <img src="assets/img/<?php echo $data['foto_produk']; ?>" alt="<?php echo $data['nama_produk']; ?>" loading="lazy">
                        <div class="pgc-badge badge-stok">Tersedia</div>
                    </div>
                    <div class="pgc-body">
                        <div class="pgc-name"><?php echo $data['nama_produk']; ?></div>
                        <div class="pgc-desc"><?php echo $data['deskripsi_produk']; ?></div>
                        <div class="pgc-price-row">
                            <div>
                                <div class="pgc-price-label">Harga</div>
                                <div class="pgc-price">Rp <?php echo number_format($data['harga_produk']); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="pgc-footer">
                        <form method="POST" action="keranjang_act.php?act=add" class="pgc-cart-form">
                            <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>">
                            <input type="hidden" name="harga" value="<?php echo $data['harga_produk']; ?>">
                            <div class="input-row">
                                <input type="number" name="jumlah" class="pgc-qty-input" value="1" min="1">
                                <button type="submit" class="pgc-add-btn">
                                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
                                    + Keranjang
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- Empty state (hidden by default) -->
        <div class="empty-state d-none" id="emptyState">
            <svg width="80" height="80" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            <h4>Produk tidak ditemukan</h4>
            <p>Coba kata kunci yang berbeda</p>
        </div>
    </div>
</div>

<script>
// Update count on load
document.addEventListener('DOMContentLoaded', function() {
    var items = document.querySelectorAll('.product-item');
    document.getElementById('countNum').textContent = items.length;
});

function filterProducts() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var items = document.querySelectorAll('.product-item');
    var visible = 0;

    items.forEach(function(item) {
        var name = item.getAttribute('data-name');
        if (name.includes(input)) {
            item.style.display = '';
            visible++;
        } else {
            item.style.display = 'none';
        }
    });

    document.getElementById('countNum').textContent = visible;
    document.getElementById('emptyState').classList.toggle('d-none', visible > 0);
}
</script>