<?php
    require_once('config.php');
    include('session.php');
    $base_url=$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 
	$arr_url = explode('/',$base_url);
	$base_url_config = "http://".implode('/',[$arr_url[0],$arr_url[1]]);
	$base_file = implode('/',[$arr_url[0],$arr_url[1]]);
?>

<?php
	if(isset($_POST)){
		$username = $_POST['username'];
		$password = sha1($_POST['password']);

		$stmt = $db->prepare("select * from users WHERE username = :username");
        $result = $stmt->execute(array("username"=>$username));
        
        $data_user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($data_user) < 1){
            $_SESSION['message'] = "Wrong Username or Password";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        else {
            $db_password_user = $data_user[0]['password']; 
            if($password == $db_password_user) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $data_user[0]['id'];
                $_SESSION['logged_in'] = True;
                $_SESSION['role'] = "member";
                return header('Location: '.$base_url_config.'/home.php');
            }
            else{
                $_SESSION['message'] = "Wrong Username or Password";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }
		
	}
	else{
		echo 'No Data';
	}
	?>