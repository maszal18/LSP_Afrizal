<?php 
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan Login Terlebih Dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(tambahProduk($_POST) > 0){
        echo "
            <script type='text/javascript'>
                alert('Data Berhasil Ditambahkan');
                window.location = 'produk.php';
            </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Gagal Ditambahkan');
            window.location = 'produk.php';
        </script>
    ";
    }
}


?>

<link rel="stylesheet" href="style.css">
<?php require '../layout/sidebar.php'?>
<div id="main">
<?php require '../layout/navbar-admin.php'; ?>
    <br>
   <div class="container col-5 w-25 p-3">
    <h3>Tambah Data Produk</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama_produk">Nama Produk</label><br />
        <input type="text" name="nama_produk" id="nama_produk" class="col-12" placeholder="Masukan Nama Produk"><br /> <br />

        <label for="foto">Foto</label><br />
        <input type="file" name="foto" id="foto" class="col-12" placeholder="Masukan Foto Produk"><br /> <br />

        <label for="harga">Harga</label><br />
        <input type="text" name="harga" id="harga" class="col-12" placeholder="Masukan Harga"><br /> <br />

        <label for="stok">Stok</label><br />
        <input type="text" name="stok" id="stok" class="col-12" placeholder="Masukan Stok"><br /> <br />

        <label for="deskripsi">Deskripsi</label><br />
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="col-12" placeholder="Masukan Deskripsinya"></textarea><br /> <br />
        
        <button type="submit" class="btn btn-primary w-100" name="kirim">Tambah</button>
    </form>
   </div>
</div>
</div>
<?php require '../layout/footer-admin.php'; ?>

