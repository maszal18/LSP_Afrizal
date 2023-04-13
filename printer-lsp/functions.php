<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'printer');

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function checkoutProduct($data)
{
    global $conn;

    foreach ($_SESSION['cart'] as $product_id => $result) :
?>
        <?php
        $barang = query("SELECT * FROM produk WHERE id_produk = '$product_id'")[0];

        $totalHarga = $result * $barang["harga"];
        $tanggal = $data["tanggal_transaksi"];
        $alamat = $data["alamat"];
        $nomor_whatsapp = $data["nomor_whatsapp"];
        $nama_lengkap = $_SESSION["nama_lengkap"];
        $id = $barang["id_produk"];
        $nama_produk = $data["nama_produk"];
        $price = $totalHarga;
        $stok = $barang["stok"];
        $sisa = $stok - $result;
        $foto = $barang["foto"];
        $st = 'proses';

        // masukan ke database
        $queryCheckout = "INSERT INTO transaksi VALUES(
            NULL,
            '$tanggal',
            '$nama_lengkap',
            '$alamat',
            '$nomor_whatsapp',
            '$nama_produk',
            '$price',
            '$foto',
            '$st')";
        // masukan ke database

        unset($_SESSION['cart']);
        mysqli_query($conn, $queryCheckout);
        if ($queryCheckout) {
            $updateStok = mysqli_query($conn, "UPDATE produk SET stok = '$sisa'
            WHERE id_produk = '$id'");
        }
        ?>
        <?php
    endforeach;
    return mysqli_affected_rows($conn);
}
        ?>