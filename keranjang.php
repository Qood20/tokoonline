<!-- 
    FILE: keranjang.php
    NOTE: UI Upgrade - Matching dengan Homepage TokoOnline
-->

<!-- LOAD FONT & ICON -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- CSS SCOPED - Matching Homepage Color -->
<style>
    .cart-modern-wrapper {
        font-family: 'Poppins', sans-serif;
        background-color: #f0fdf4; /* Light mint green - matching hero */
        color: #1f2937;
        padding: 40px 0;
        min-height: 80vh;
    }
    .cart-modern-wrapper * {
        box-sizing: border-box;
    }
    .cart-modern-wrapper .container-custom {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .cart-modern-wrapper .page-title {
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 12px;
        color: #064e3b; /* Dark emerald - matching brand */
    }
    /* Card Style */
    .cart-modern-wrapper .cart-card {
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 10px 25px -5px rgba(6, 78, 59, 0.1);
        padding: 30px;
        margin-bottom: 30px;
        border: 2px solid #d1fae5;
    }
    /* Product Item */
    .cart-modern-wrapper .product-item {
        display: flex;
        align-items: center;
        padding: 20px 0;
        border-bottom: 2px solid #ecfdf5;
        gap: 24px;
        flex-wrap: wrap;
        transition: all 0.3s ease;
    }
    .cart-modern-wrapper .product-item:last-child { border-bottom: none; }
    .cart-modern-wrapper .product-item:hover {
        background: #f0fdf4;
        margin: 0 -10px;
        padding: 20px 10px;
        border-radius: 12px;
    }
    .cart-modern-wrapper .product-image {
        width: 120px;
        height: 120px;
        border-radius: 12px;
        object-fit: cover;
        background-color: #f0fdf4;
        border: 3px solid #d1fae5;
        flex-shrink: 0;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .cart-modern-wrapper .product-item:hover .product-image {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(6, 78, 59, 0.15);
    }
    .cart-modern-wrapper .product-info { flex: 1; min-width: 200px; }
    .cart-modern-wrapper .product-name {
        font-weight: 600;
        font-size: 1.2rem;
        color: #064e3b;
        margin-bottom: 6px;
    }
    .cart-modern-wrapper .product-price {
        font-weight: 700;
        color: #059669; /* Emerald green */
        font-size: 1.25rem;
        margin-top: 8px;
        display: block;
    }
    /* Quantity Stepper - Green Theme */
    .cart-modern-wrapper .qty-stepper {
        display: inline-flex;
        align-items: center;
        border: 2px solid #059669;
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
    }
    .cart-modern-wrapper .qty-btn {
        background: #d1fae5;
        border: none;
        width: 36px;
        height: 40px;
        cursor: pointer;
        color: #064e3b;
        font-weight: 700;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
    }
    .cart-modern-wrapper .qty-btn:hover { 
        background: #059669; 
        color: white;
    }
    .cart-modern-wrapper .qty-input {
        width: 50px;
        text-align: center;
        border: none;
        font-weight: 700;
        font-size: 1.1rem;
        color: #064e3b;
        -moz-appearance: textfield;
        pointer-events: none;
    }
    /* Summary Box - Premium Green */
    .cart-modern-wrapper .summary-card {
        background: linear-gradient(135deg, #064e3b 0%, #047857 100%);
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 10px 25px -5px rgba(6, 78, 59, 0.3);
        position: sticky;
        top: 20px;
        height: fit-content;
        color: white;
    }
    .cart-modern-wrapper .summary-card h5 {
        color: white;
        font-weight: 700;
        border-bottom: 2px solid #34d399;
        padding-bottom: 15px;
        margin-bottom: 20px;
    }
    .cart-modern-wrapper .summary-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        color: #d1fae5;
        font-size: 1rem;
    }
    .cart-modern-wrapper .summary-total {
        border-top: 3px dashed #34d399;
        padding-top: 20px;
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        font-weight: 700;
        font-size: 1.5rem;
        color: #fff;
    }
    /* Buttons - Green Theme */
    .cart-modern-wrapper .btn-custom {
        padding: 14px 28px;
        border-radius: 12px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.3s;
        text-decoration: none;
        cursor: pointer;
        border: none;
        width: 100%;
        font-size: 1rem;
    }
    .cart-modern-wrapper .btn-primary-custom {
        background: #059669;
        color: white;
        box-shadow: 0 4px 14px 0 rgba(5, 150, 105, 0.4);
    }
    .cart-modern-wrapper .btn-primary-custom:hover {
        background: #047857;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px 0 rgba(5, 150, 105, 0.5);
        color: white;
    }
    .cart-modern-wrapper .btn-success-custom {
        background: #34d399;
        color: #064e3b;
        font-weight: 700;
    }
    .cart-modern-wrapper .btn-success-custom:hover {
        background: #6ee7b7;
        transform: translateY(-3px);
        color: #064e3b;
    }
    .cart-modern-wrapper .btn-outline-custom {
        background: transparent;
        border: 2px solid #059669;
        color: #059669;
        width: auto;
    }
    .cart-modern-wrapper .btn-outline-custom:hover {
        background: #059669;
        color: white;
        transform: translateY(-2px);
    }
    .cart-modern-wrapper .btn-danger-ghost {
        background: #fef2f2;
        color: #dc2626;
        padding: 10px 18px;
        font-size: 0.9rem;
        border-radius: 10px;
        text-decoration: none;
        display: inline-block;
        font-weight: 600;
        transition: all 0.2s;
    }
    .cart-modern-wrapper .btn-danger-ghost:hover {
        background: #fee2e2;
        color: #b91c1c;
        transform: scale(1.05);
    }
    /* Empty State */
    .cart-modern-wrapper .empty-state {
        text-align: center;
        padding: 80px 20px;
        background: white;
        border-radius: 16px;
        box-shadow: 0 10px 25px -5px rgba(6, 78, 59, 0.1);
        border: 2px solid #d1fae5;
    }
    .cart-modern-wrapper .empty-icon { 
        font-size: 5rem; 
        color: #d1fae5; 
        margin-bottom: 25px;
    }
    .cart-modern-wrapper .empty-state h4 {
        color: #064e3b;
        font-weight: 700;
        font-size: 1.5rem;
        margin-bottom: 15px;
    }
    /* Trust Badges */
    .cart-modern-wrapper .trust-badges {
        display: flex;
        justify-content: space-around;
        margin-top: 25px;
        padding-top: 25px;
        border-top: 2px solid #047857;
        text-align: center;
        font-size: 0.85rem;
        color: #d1fae5;
    }
    .cart-modern-wrapper .trust-item i {
        font-size: 1.5rem;
        color: #34d399;
        margin-bottom: 6px;
        display: block;
    }
    /* Responsive */
    @media (max-width: 768px) {
        .cart-modern-wrapper .product-item { flex-direction: column; align-items: flex-start; }
        .cart-modern-wrapper .product-image { width: 100%; height: 200px; }
        .cart-modern-wrapper .summary-card { position: static; margin-top: 30px; }
        .cart-modern-wrapper .action-mobile { width: 100%; margin-top: 15px; }
    }
</style>

<!-- MAIN WRAPPER -->
<div class="cart-modern-wrapper">
    <div class="container-custom">
        
        <h3 class="page-title">
            <i class="fa-solid fa-cart-shopping"></i> 
            Keranjang Belanja
        </h3>

        <?php
        if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) {
        ?>
            <!-- Empty State -->
            <div class="empty-state">
                <div class="empty-icon">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
                <h4>Keranjang Belanja Kosong</h4>
                <p style="color: #6b7280; margin-bottom: 25px; font-size: 1.1rem;">
                    Yuk isi keranjang dengan produk berkualitas!
                </p>
                <a href="index.php?page=produk" class="btn-custom btn-primary-custom" style="width: auto; padding: 15px 35px;">
                    <i class="fa-solid fa-magnifying-glass"></i> Mulai Belanja
                </a>
            </div>
        <?php
        } else {
        ?>

        <form method="POST" action="keranjang_act.php?act=update">
            <div class="row">
                <!-- LEFT: Product List -->
                <div class="col-lg-8">
                    <div class="cart-card">
                        <?php 
                        $no = 1;
                        $total = 0;
                        foreach ($_SESSION['keranjang'] as $id_produk => $item): 
                            $subtotal = $item['harga_produk'] * $item['jumlah'];
                            $total += $subtotal;
                            // Path gambar sesuai struktur folder
$gambar = !empty($item['gambar']) ? 'assets/img/' . $item['gambar'] : 'https://via.placeholder.com/150x150/059669/ffffff?text=' . urlencode(substr($item['nama_produk'], 0, 2));
                        ?>
                        <div class="product-item">
                            <img src="<?php echo $gambar; ?>" 
                                 alt="<?php echo htmlspecialchars($item['nama_produk']); ?>" 
                                 class="product-image">
                            
                            <div class="product-info">
                                <div class="product-name">
                                    <?php echo htmlspecialchars($item['nama_produk']); ?>
                                </div>
                                <div style="font-size:0.9rem; color:#6b7280; margin-bottom: 5px;">
                                    Kode: #<?php echo $id_produk; ?>
                                </div>
                                <span class="product-price">
                                    Rp <?php echo number_format($item['harga_produk'], 0, ',', '.'); ?>
                                </span>
                            </div>

                            <div class="d-flex flex-column align-items-end gap-3 action-mobile">
                                <!-- Custom Qty Stepper -->
                                <div class="qty-stepper">
                                    <button type="button" class="qty-btn" 
                                            onclick="cartMod_updateQty(<?php echo $id_produk; ?>, -1)">
                                        <i class="fa-solid fa-minus" style="font-size: 0.7rem;"></i>
                                    </button>
                                    <input type="number" name="jumlah[]" 
                                           class="qty-input" 
                                           id="cart-qty-<?php echo $id_produk; ?>" 
                                           value="<?php echo $item['jumlah']; ?>" 
                                           min="0" readonly>
                                    <input type="hidden" name="id_produk[]" value="<?php echo $id_produk; ?>">
                                    <button type="button" class="qty-btn" 
                                            onclick="cartMod_updateQty(<?php echo $id_produk; ?>, 1)">
                                        <i class="fa-solid fa-plus" style="font-size: 0.7rem;"></i>
                                    </button>
                                </div>
                                
                                <a href="keranjang_act.php?act=delete&id_produk=<?php echo $id_produk; ?>" 
                                   class="btn-danger-ghost"
                                   onclick="return confirm('Yakin mau hapus item ini?')">
                                    <i class="fa-solid fa-trash"></i> Hapus
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <a href="index.php?page=produk" class="btn-custom btn-outline-custom">
                        <i class="fa-solid fa-arrow-left"></i> Lanjut Belanja
                    </a>
                </div>

                <!-- RIGHT: Sticky Summary -->
                <div class="col-lg-4">
                    <div class="summary-card">
                        <h5><i class="fa-solid fa-receipt"></i> Ringkasan Pesanan</h5>
                        
                        <div class="summary-row">
                            <span>Total Belanja</span>
                            <span>Rp <?php echo number_format($total, 0, ',', '.'); ?></span>
                        </div>
                        <div class="summary-row">
                            <span>Ongkos Kirim</span>
                            <span style="color: #6ee7b7; font-weight: 600;">Gratis</span>
                        </div>
                        <div class="summary-row">
                            <span>Diskon</span>
                            <span>- Rp 0</span>
                        </div>
                        
                        <div class="summary-total">
                            <span>Total Bayar</span>
                            <span>Rp <?php echo number_format($total, 0, ',', '.'); ?></span>
                        </div>

                        <div style="margin-top: 30px;" class="d-grid gap-3">
                            <button type="submit" class="btn-custom btn-primary-custom">
                                <i class="fa-solid fa-rotate"></i> Perbarui Keranjang
                            </button>
                            <a href="index.php?page=checkout" class="btn-custom btn-success-custom">
                                <i class="fa-solid fa-lock"></i> Checkout Sekarang
                            </a>
                            <a href="keranjang_act.php?act=clear" 
                               class="btn-custom" 
                               style="background: rgba(255,255,255,0.2); color: white; border: 2px solid rgba(255,255,255,0.3);" 
                               onclick="return confirm('Kosongkan seluruh keranjang?')">
                                <i class="fa-solid fa-trash-can"></i> Kosongkan Semua
                            </a>
                        </div>

                        <!-- Trust Badges -->
                        <div class="trust-badges">
                            <div class="trust-item">
                                <i class="fa-solid fa-shield-halved"></i>
                                <span>Secure</span>
                            </div>
                            <div class="trust-item">
                                <i class="fa-solid fa-truck-fast"></i>
                                <span>Fast Delivery</span>
                            </div>
                            <div class="trust-item">
                                <i class="fa-solid fa-rotate-left"></i>
                                <span>Easy Return</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <?php
        }
        ?>
    </div>
</div>

<!-- JavaScript -->
<script>
    function cartMod_updateQty(id, change) {
        let input = document.getElementById('cart-qty-' + id);
        let newVal = parseInt(input.value) + change;
        
        if (newVal < 1) newVal = 1;
        
        input.value = newVal;
        
        // Animasi visual
        input.style.transform = 'scale(1.2)';
        input.style.transition = 'transform 0.2s';
        setTimeout(() => {
            input.style.transform = 'scale(1)';
        }, 200);
    }
</script>