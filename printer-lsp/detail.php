<?php
include 'layout/navbar.php';

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

?>
<link rel="stylesheet" href="style.css">
<div id="detail" class="container mt-3 border border-black bg-white rounded-4 ">
    <form action="" method="post">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
        <img src="image/<?= $produk["foto"]; ?>" class="w-100">
        </div>
        <div class="col-md-6">
            <div class="detail-container">
                <h1><?= $produk["nama_produk"]; ?></h1>
                <hr>
                <h4>Rp.<?= number_format($produk["harga"]); ?></h4>
                <div class="text-secondary">Tersisa : <?= $produk["stok"]; ?></div>
                <div><?= $produk["deskripsi"]; ?></div>
                <div class="mt-3">
                    <label for="qty">Masukkan Jumlah Produk Yang Ingin Dibeli</label>
                    <input class="form-control" type="number" name="qty" id="qty">
                </div>
                <div class="mt-3">
                    <button class="btn btn-success w-60" type="submit" name="beli">Masukkan Ke Keranjang</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<?php

if (isset($_POST["beli"])) {
    $qty = $_POST["qty"];
    if($qty > $produk['stok']){
      echo "
      <script type='text/javascript'>
        alert('Jumlah Pesanan Melebihi Batas Stok!');
        window.location= 'index.php'
      </script>
      ";
    }
    if($qty <= 0){
      echo "
      <script type='text/javascript'>
        alert('Jumlah Pesanan Tidak Valid!');
        window.location= 'index.php'
      </script>
      ";
    }
    $_SESSION["cart"][$id] = $qty;

    echo "
    <script type='text/javascript'>
        alert('Produk Berhasil Ditambahkan Ke Keranjang Belanja!');
        window.location= 'keranjang.php'
    </script>
   ";
}
?>
<?php include 'layout/footer.php'; ?>