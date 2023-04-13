<?php 

require 'functions.php';

session_start();

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
    alert('Silahkan Login Terlebih Dahulu')
    window.location = '../login/index.php';
    </script>
    ";
}

if($_SESSION["roles"] != "Admin"){
    echo "
    <script type='text/javascript'>
    alert('Mohon Maaf Anda Bukan Admin, Tidak Bisa Masuk!')
    window.location = '../login/index.php';
    </script>
    ";
}


if(isset($_POST["submit"])){
    if(tambahUser($_POST) > 0 ){
        echo "
        <script type='text/javascript'>
        alert('Data Berhasil Ditambahkan');
        window.location = 'user.php'
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
        alert('Data Gagal Ditambahkan');
        window.location = 'user.php'
        </script>
        ";
    }
}


?>


<link rel="stylesheet" href="style.css">
<?php require '../layout/sidebar.php'; ?>
<div id="main">
    <?php require '../layout/navbar-admin.php'; ?>
    <br>
    <div class="">
        <div class="container col-5 w-25 p-3">
            <h2>Tambah Data User</h2>
            <form action="proses_register.php" method="POST" enctype="multipart/form-data">
                <label for="nama_lengkap">Nama Lengkap</label><br />
                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukan Nama Anda" class="col-12"><br /> <br />
                
                <label for="username">Username</label><br >
                <input type="text" name="username" id="username" placeholder="Masukan Username" class="col-12"><br /> <br />
                
                <label for="password">Password</label><br />
                <input type="password" name="password" id="password" placeholder="Masukan Password" class="col-12"><br /> <br />
                
                <input type="hidden" name="roles" value="Customer"> 
                <button class="btn btn-primary w-100" type="submit" name="submit">Tambah Data</button>
                <p>Udah punya <a href="user.php"> Kembali </p> 
                 </form>
        </div>
    </div>
</div>  
<?php require '../layout/footer-admin.php'; ?>