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
<body>
<div class="container col-5">
          <h1>Login akun anda</h1>
            <form action="proses_login.php" method="post" class="">
                <label>Username</label><br>
                <input type="text" id="username" name="username" placeholder="Masukan Username"><br>
                <label>Password</label><br>
                <input type="password" id="password" name="password"  placeholder="Masukan Password"><br>
                <p>Anda belum punya akun? <a href="register.php"> register </p>
                <button>Log in</button>
            </form>
        </div>  
</body>
</html>