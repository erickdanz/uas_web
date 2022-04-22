<?php 
    include('users/conn/connection.php');
    session_start();
    $base_url=$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 
    $arr_url = explode('/',$base_url);
    $base_url_config = "http://".implode('/',[$arr_url[0],$arr_url[1]]);
    $base_file = implode('/',[$arr_url[0],$arr_url[1]]);
    if(isset($_POST)){
        $username = $_POST['username'];
        $shows_id = $_POST['shows_id'];
        $method = $_POST['p_method'];
        $tickets = $_POST['tickets'];
        $cnt_tickets = count(explode(',',$tickets));
        $sql_get_user_id = "SELECT * FROM users WHERE username = '$username'";
        $result_user = mysqli_query($conn,$sql_get_user_id);
        $result_user = mysqli_fetch_assoc($result_user);
        $date = date('Y-m-d H:i:s');
        $id_user = $result_user['id'];  
        $sql_check_invoice = "SELECT * FROM pembelian where id_user = $id_user and id_shows = $shows_id and detail_tiket = '$tickets'";
        $result_check = mysqli_query($conn,$sql_check_invoice);
        if(mysqli_num_rows($result_check) < 1){
            $sql_insert_invoice = "INSERT INTO pembelian (id_user,id_shows,detail_tiket,jlh_tiket,verif_oleh,metode_pembayaran,created_at)
                                    VALUES ($id_user,$shows_id,'$tickets',$cnt_tickets,'','$method','$date')";
            $result = mysqli_query($conn,$sql_insert_invoice);
            print_r($result);
            if($result){
                $_SESSION['success'] = "Pemesanan Tiket Berhasil";
                return header('Location: '.$base_url_config.'/home.php');
            }
            else {
                print_r(mysqli_error($conn));
                print_r("Something Bad Happened");
                die();
            }
        }
        else {
            $_SESSION['error'] = "Pembelian sejenis telah dilakukan";

            return header('Location: '.$base_url_config.'/home.php');
        }
    }

?>