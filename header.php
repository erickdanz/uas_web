<?php 
    include('session.php');

    //Get Last Segment Url Path
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    //Mendapatkan informasi sedang berada di file apa
    $current_segment = end($uri_segments);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="users/assets/style.css" /> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <?php 
        if($current_segment == "payment_page.php"){
            ?>
                <link rel="stylesheet" href="users/assets/css/pp.css">
                <script src="users/assets/js/pp.js"></script>
                <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
                <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php
        }
    ?>
</head>
<body>
    <div class="container-fluid">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>
        <nav class="navbar navbar-expand-lg navbar-dark nav-head">
            <div class="container-fluid"> 
                <a class="navbar-brand" href="home.php">MITIX</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <?php 
                        if($current_segment == 'home.php'){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#now_playing">Now Playing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#coming_soon">Coming Soon</a>
                        </li>
                    <?php 
                        }
                    ?>
                    <?php
                        if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != True){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrasi.php" >Register</a>
                        </li>
                    <?php
                        }
                        else{
                    ?>
                        <li class="nav-item">
                            <a href="history.php" class="nav-link">History</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">Logout</a>
                        </li>
                    <?php
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </nav>  
    </div>
    <div class="container-fluid">
        <?php 
            if(isset($_SESSION['success'])){
                ?>
                <div class="alert alert-success d-flex alert-dismissible align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div>
                        <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>                        
                    </div>
                </div>
                <?php
            }
            else if (isset($_SESSION['error'])){
                ?>
                <div class="alert alert-danger d-flex alert-dismissible align-items-center" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        <?php 
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
