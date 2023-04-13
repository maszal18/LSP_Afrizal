<?php
require 'functions.php';
$id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Keranjang Belanja</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="bg-warning row g-10 w-25 p-5 content container-fluid border border-black mx-auto rounded-4">
        <h1>Edit Produk</h1>
        <form action="proses_edit_keranjang.php" method="POST">
            <input type="hidden" name="id_produk" value="<?= $_GET["id"]; ?>">
            
            <label for="qty">Kuantitas</label>
            <input type="number" name="qty" id="qty" value="<?= $_SESSION["cart"][$_GET["id"]]; ?>">
            
            <button type="submit" name="edit">Edit</button>
        </form>
    </div>
</body>
</html>