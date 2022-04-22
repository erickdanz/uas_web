<?php
	require_once('config.php');
	$base_url=$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 
	$arr_url = explode('/',$base_url);
	$base_url_config = "http://".implode('/',[$arr_url[0],$arr_url[1]]);
	$base_file = implode('/',[$arr_url[0],$arr_url[1]]);
?>

<?php
	if(isset($_POST)){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$phonenumber = $_POST['phonenumber'];
		$tanggal = $_POST['tanggal'];
		$bulan = $_POST['bulan'];
		$tahun = $_POST['tahun'];
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$fp = $firstname. ";" .$lastname. ";" .$email. ";" .$gender.";".$phonenumber.";".$tanggal. "-".$bulan. "-".$tahun. ";".$username. ";".$password. "\n";
    file_put_contents('daftar_registrasi.txt', $fp,FILE_APPEND);

		$sql = "INSERT INTO users (firstname, lastname, email, gender, phonenumber, tanggal, bulan, tahun, username, password) VALUE(?,?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $gender, $phonenumber, $tanggal, $bulan, $tahun, $username, $password]);

		return header('Location: '.$base_url_config.'/keluaran_registrasi.php');
	}
	else{
		echo 'No Data';
	}
	?>