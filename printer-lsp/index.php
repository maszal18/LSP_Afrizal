<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body class="index">
<?php 
include 'layout/navbar.php';
?>
<?php $produk = query("SELECT * FROM produk WHERE stok > 0"); ?>
    
    <div id="home" class="produk container">
        <!-- Carousel -->
        <div id="" class="mt-3 carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active rounded-4" data-bs-interval="700">
                    <img src="assets/images/bgrn.png" class="d-block w-100 rounded-4 " alt="...">
                </div>
                <div class="carousel-item active rounded-4" data-bs-interval="700">
                    <img src="assets/images/banner1.png" class="d-block w-100 rounded-4 " alt="...">
                </div>
                <div class="carousel-item active rounded-4" data-bs-interval="700">
                    <img src="assets/images/careem.png" class="d-block w-100 rounded-4 " alt="...">
                </div>
            </div>
        </div>
        <!-- Carousel -->
        <h2 class="my-3 text-white">Produk Yang Tersedia :</h2>
        <br>
    <div class="row g-3 border border-black bg-white rounded-2">
        <?php $i = 1;?>
        <?php foreach($produk as $data) : ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="image/<?= $data['foto']; ?>" class="card-img-top" alt="<?= $data['nama_produk']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['nama_produk']; ?></h5>
                        <p class="card-text"><?= $data['deskripsi']; ?></p>
                        <hr>
                        <h6 class="card-text"><b>Harga :</b> Rp. <?= number_format($data['harga'], 0, ',', '.'); ?></h6>
                        <p class="text-secondary">Tersisa : <?= $data['stok']; ?></p>
                        <a href="detail.php?id=<?= $data["id_produk"]; ?>" class="btn btn-success col-12">Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include 'layout/footer.php'; ?>
</body>