<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registrasi Selesai</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style type="text/css">
        body{
            background-color: #FDEFF4;
            width: 100%;
        }
        .kotakregis{
            border-radius : 15px;
            width: 500px;
            margin-left: 400px;
            margin-top: 120px;
            padding: 20px 20px 20px 20px;
            border: 1px solid;
            background-color: white;
            text-align: center;
        }

        .kotak1{
            width: 200px;
            height: 200px;
            margin-left: 10px;
            display: inline-block;
        }

        .kotak2{
            border-radius : 5px;
            width: 100%;
            background-color: #3A3845;
            height: 30px;
            border: 1px solid black;
            text-align: center;
        }

        a {
            color: white;
            text-decoration: none;
        }
        p{
            font-size : 13pt;
        }
        
    </style>
</head>
<body>
<div>
    <form method="post" action="login.php" enctype="multipart/form-data">
        <div class="container"> 
            <div class="row-5">
                <div class="kotakregis">
                    <h1>Registrasi Selesai</h1>
                    <div class="kotak1">
                        <figure class="figure">
                            <img src="checkmark.GIF" class="figure-img img-fluid rounded" alt="...">
                        </figure>
                    </div>
                    <p>Anda telah selesai melakukan registrasi</p>
                    <input class="btn btn-primary" style="background-color:#3A3845; width: 100%;" type="submit" id="back" name="back" value="Kembali Ke Halaman Login">
                </div>
            </div>
        </div>
    </form>
</div>
    <?php
    if(isset($_POST['username'], $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['gender'], $_POST['phonenumber'], $_POST['tanggal'], $_POST['bulan'], $_POST['tahun'], $_POST['username'], $_POST['password']))
    {
    $cetakfirstname = $_POST['firstname'];
    $cetaklastname = $_POST['lastname'];
    $cetakemail = $_POST['email'];
    $cetakgender = $_POST['gender'];
    $cetakphonenumber = $_POST['phonenumber'];
    $cetaktanggal = $_POST['tanggal'];
    $cetakbulan = $_POST['bulan'];
    $cetaktahun = $_POST['tahun'];
    $cetakusername = $_POST['username'];
    $cetakpassword = $_POST['password'];

    $fp = $cetakfirstname. ";" .$cetaklastname. ";" .$cetakemail. ";" .$cetakgender.";".$cetakphonenumber.";".$cetaktanggal. "-".$cetakbulan. "-".$cetaktahun. ";".$cetakusername. ";".$cetakpassword. "\n";
    file_put_contents('daftar_registrasi.txt', $fp,FILE_APPEND);
    }
    ?>