<div class="pesanan-page">

<style>
/* CSS KHUSUS HALAMAN PESANAN */
.pesanan-page .pesanan-container {
    background: #ffffff;
    padding: 28px;
    border-radius: 14px;
    box-shadow: 0 0.5rem 1.2rem rgba(0,0,0,.08);
    margin: 30px auto;
}

.pesanan-page h3 {
    font-weight: 700;
    color: #004d40;
    margin-bottom: 22px;
    border-left: 5px solid #004d40;
    padding-left: 14px;
}

.pesanan-page table {
    width: 100%;
    border-collapse: collapse;
}

.pesanan-page thead {
    background-color: #e8f5e9;
}

.pesanan-page th,
.pesanan-page td {
    padding: 14px;
    border-bottom: 1px solid #eee;
}

.pesanan-page th {
    color: #004d40;
    font-weight: 600;
}

.pesanan-page tbody tr:hover {
    background-color: #f5fbf8;
}

.pesanan-page .status {
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    display: inline-block;
}

.pesanan-page .status.belum {
    background-color: #ffc107;
    color: #212529;
}

.pesanan-page .btn-detail {
    background-color: #004d40;
    color: #fff;
    padding: 7px 18px;
    border-radius: 20px;
    font-size: 13px;
    text-decoration: none;
    font-weight: 600;
}

.pesanan-page .btn-detail:hover {
    background-color: #00382e;
}
</style>

<div class="pesanan-container">
    <h3>Riwayat Pesanan Anda</h3>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>23 Feb 2026</td>
                <td>Rp 25.000</td>
                <td><span class="status belum">Belum Dibayar</span></td>
                <td><a href="#" class="btn-detail">Detail</a></td>
            </tr>
        </tbody>
    </table>
</div>

</div>