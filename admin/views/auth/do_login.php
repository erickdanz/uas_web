<?php  
    $base_url=$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 
    $arr_url = explode('/',$base_url);
    $base_url_config = "http://".implode('/',[$arr_url[0],$arr_url[1]]);
    $base_file = implode('/',[$arr_url[0],$arr_url[1]]);
    session_start();
    if(isset($_POST)){
        $username = $_POST['usn'];
        $password = $_POST['psw'];

        if($username == 'admin' && $password == 'admin'){
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = "Admin";
            $_SESSION['role'] = "admin";
            return header('Location: '.$base_url_config.'/admin/views/index.php');
        }
    }

?>