<?php 
// panggil koneksi
require 'functions.php';

// deklrasiin data-data apa aja yang mau kita input
$nama_lengkap = $_POST["nama_lengkap"];
$username = $_POST["username"];
$password = $_POST["password"];
$foto = $_POST["foto"];
$roles = $_POST["roles"];

// bikin sql/query-nya
$query = mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$nama_lengkap', '$username', '$password','$foto','$roles')");

// bikin kondisi kalo misalkan berhasil
if($query){
    echo "
        <script type='text/javascript'>
            alert('Data Berhasil Ditambahkan');
            window.location = 'index.php'
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Data Gagal Ditambahkan');
        window.location = 'index.php'
    </script>
";
}


?>