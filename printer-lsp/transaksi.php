<?php
include 'layout/navbar.php';

$transaksi = query("SELECT * FROM transaksi where nama_lengkap='$_SESSION[nama_lengkap]'");

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan Login Terlebih Dahulu')
        window.location = 'login/index.php';
    </script>
    ";
}

?>
<link rel="stylesheet" href="style.css">
<div class="container mt-3">
    <center>
        <h3 class="text-white">Pesanan Anda :</h3>
    </center>
    <table class="table table-responsive table-bordered border border-black table-warning">
        <tr class="table-primary border-black">
            <th>No.</th>
            <th>Foto</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>Nomor Telpon</th>
            <th>Produk</th>
            <th>Total Harga</th>
            <th>Status</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($transaksi as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="image/<?= $data["foto"]; ?>" alt="" width="70"></td>
                <td><?= $data["tanggal_transaksi"]; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td><?= $data["nomor_whatsapp"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td>Rp. <?= number_format($data["subtotal"], 0, ',', '.'); ?></td>
                <td><?= $data["status"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </div>
<?php include 'layout/footer.php'; ?>