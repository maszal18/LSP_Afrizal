<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="boreg">
<div class="">
        <div class="container col-5">
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
                    <p>Udah punya <a href="index.php"> Kembali </p> 
                 </form>
        </div>
    </div>
</div>  
</body>
</html>