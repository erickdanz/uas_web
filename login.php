<?php 
    include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style type="text/css">
        body{
            background-color: #FDEFF4;
            height : 400px;
        }
        .kotak_login{
            border-radius : 15px;
            width: 350px;
            margin-left: 470px;
            margin-top: 120px;
            padding: 20px 20px 20px 20px;
            border: 1px solid;
            background-color: #f8effd;
        }
        .login1{
            color : black;  
            display: block;
            text-decoration: none;
            margin-top: 10px;
        }
        /* h1 {
            text-align : center;
        }
        p {
            text-align : center;
        } */

    </style>
</head>
<body>

<div>
    <?php
        if(isset($_POST['create'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
        }
    ?>
</div>

<div>
    <?php 
        //Cek apakah session memiliki attribute message dan message tidak kosong
        if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
    ?>
        <script>
        alert("<?php echo $_SESSION['message']; ?>")
        </script> 
    <?php
        //Bersihkan Session Message
        $_SESSION['message'] = '';
        }
    ?>
    <form method="post" action="process_login.php" enctype="multipart/form-data">
        <div class="container"> 
            <div class="row-5">
                <div class="kotak_login">
                    <h1>Login</h1>
                    <p>Masukkan Username dan Password</p>
                    <hr class="mb-3">
                    <label for="username"><b>Username</b></label>
                    <input class="form-control" id="username" type="text" name="username" required>

                    <label for="password"><b>Password</b></label>
                    <input class="form-control" id="password"  type="password" name="password" required>

                    <input class="btn btn-primary" style="margin-top: 10px; background-color:#3A3845; width : 100%;" type="submit" id="register" name="create" value="Login">
                    <a href="registrasi.php" class="login1" style="text-align : center;">Belum Punya Akun? Register Sekarang</a>
                </div>
            </div>
        </div>
    </form>
</div>