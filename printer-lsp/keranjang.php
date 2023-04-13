<?php include 'layout/navbar.php'; ?>
<link rel="stylesheet" href="style.css">
<?php
if (empty($_SESSION["cart"] || isset($_SESSION["cart"]))) {
    echo " 
    <script type='text/javascript'>
        alert('Keranjang Anda Masih Kosong, Silahkan Belanja Terlebih Dahulu');
        window.location= 'index.php';
    </script>
    ";
}

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan Login Terlebih Dahulu')
        window.location = 'login/index.php';
    </script>
    ";
}
?>

<div class="keranjang-belanja container mt-3 border-black">
        <h2>Keranjang Belanja</h2>
        <table class="table table-responsive table-hover border border-black rounded-4 bg-white">
        <tr class="table-primary border border-black rounded-4">
            <th>Foto</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        <?php $gradTotal = 0; ?>
        <?php foreach ($_SESSION["cart"] as $id_produk => $kuantitas) : ?>
            <?php
            $data = query("SELECT * FROM produk WHERE id_produk = '$id_produk'")[0];
            $totalHarga = $data["harga"] * $kuantitas;
            $gradTotal += $totalHarga;
            ?>
            <tr>
                <td><img src="image/<?= $data["foto"]; ?>" width="100"></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td>Rp. <?= number_format($data["harga"], 0, ',', '.'); ?></td>
                <td><?= $kuantitas; ?></td>
                <td>Rp. <?= number_format($totalHarga , 0, ',', '.'); ?></td>
                <td>
                    <a class="btn btn-primary my-2" href="edit_keranjang.php?id=<?= $data["id_produk"]; ?>"><i class="fa-solid fa-pen"></i></a>
                    <a class="btn btn-danger my-2" href="hapus_keranjang.php?id=<?= $data["id_produk"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Produk Ini Dari Keranjang?')"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="6">
                <h4>Total Harga :
                    Rp. <?= number_format($gradTotal , 0, ',', '.'); ?>
                </h4>
            </td>
        </tr>
        </table>
        <a class="btn btn-primary" href="checkout.php"><i class="fa-solid fa-basket-shopping"></i> Checkout</a>
        <a class="btn btn-primary" href="index.php"><i class="fa-solid "></i> Home</a>
</div>
<?php include 'layout/footer.php'; ?>
