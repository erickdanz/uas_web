<?php
require_once('config.php');
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		body{
			background-color: #FDEFF4;
			width: 100%;
			height : 800px;
		}
		.regis{
			border-radius : 15px;
			width: 500px;
			margin-left: 400px;
			margin-top: 7px;
			padding: 15px 15px 15px 15px;
			border: 1px solid;
			background-color: #f8effd;
		}
		.gender1{
			margin: 5px 0px 5px 0px;
		}
		.gender2{
			display: block;
		}
		.tanggal1{
			margin: 5px 0px 5px 0px;
		}
		.tanggal2{
			display: block;
		}
		.login1{
			display: block;
			text-decoration: none;
			margin-top: 10px;
		}
		h1 {
			text-align : center;
		}
		p {
			text-align : center;
		}

	</style>
</head>
<body>

<div>
	<?php

	?>
</div>

<div>
	<form action="process.php" method="post">
		<div class="container"> 
			<div class="row-5">
				<div class="regis">
					<h1>Registrasi</h1>
					<p>Silakan Memasukkan Informasi Akun Anda</p>
					<hr class="mb-3">
					<label for="firstname"><b>Nama Depan</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Nama Belakang</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>Email</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<div class="gender1">
						<label for="gender"><b>Gender</b></label>
						<div class="gender2">
							<input type="radio" name="gender" id="pria" value="pria" required>
							<label for="pria">Pria</label>
			                <input style="margin-left: 10px;" type="radio" name="gender" id="wanita" value="wanita" required>
							<label for="wanita">Wanita</label>
			            </div>
		            </div>

					<label for="phonenumber"><b>No.Hp</b></label>
					<input class="form-control" id="phonenumber" name="phonenumber" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required></input>

					<div class="tanggal1">
						<label for="tanggallahir"><b>Tanggal Lahir</b></label>
						<div class="tanggal2">
							<select name="tanggal" id="tanggal">
						       	<option value="1">1</option>
						       	<option value="2">2</option>
						       	<option value="3">3</option>
						       	<option value="4">4</option>
						       	<option value="5">5</option>
						       	<option value="6">6</option>
						       	<option value="7">7</option>
						       	<option value="8">8</option>
						       	<option value="9">9</option>
						       	<option value="10">10</option>
						       	<option value="11">11</option>
						       	<option value="12">12</option>
						       	<option value="13">13</option>
						       	<option value="14">14</option>
						       	<option value="15">15</option>
						       	<option value="16">16</option>
						       	<option value="17">17</option>
						       	<option value="18">18</option>
						       	<option value="19">19</option>
						       	<option value="20">20</option>
						       	<option value="21">21</option>
						       	<option value="22">22</option>
						       	<option value="23">23</option>
						       	<option value="24">24</option>
						       	<option value="25">25</option>
						       	<option value="26">26</option>
						       	<option value="27">27</option>
						       	<option value="28">28</option>
						       	<option value="29">29</option>
						       	<option value="30">30</option>
						       	<option value="31">31</option>
					        </select>

							<select style="margin-left: 10px;" name="bulan" id="bulan">
						       	<option value="Jan">Jan</option>
						       	<option value="Feb">Feb</option>
						       	<option value="Mar">Mar</option>
						       	<option value="Apr">Apr</option>
						       	<option value="May">May</option>
						       	<option value="Jun">Jun</option>
						       	<option value="Jul">Jul</option>
						       	<option value="Aug">Aug</option>
						       	<option value="Sep">Sep</option>
						       	<option value="Oct">Oct</option>
						       	<option value="Nov">Nov</option>
						       	<option value="Dec">Dec</option>
					        </select>

					        <select style="margin-left: 10px;" name="tahun" id="tahun">
						       	<option value="2022">2022</option>
						       	<option value="2021">2021</option>
						       	<option value="2020">2020</option>
						       	<option value="2019">2019</option>
						       	<option value="2018">2018</option>
						       	<option value="2017">2017</option>
						       	<option value="2016">2016</option>
						       	<option value="2015">2015</option>
						       	<option value="2014">2014</option>
						       	<option value="2013">2013</option>
						       	<option value="2012">2012</option>
						       	<option value="2011">2011</option>
						       	<option value="2010">2010</option>
						       	<option value="2009">2009</option>
						       	<option value="2008">2008</option>
						       	<option value="2007">2007</option>
						       	<option value="2006">2006</option>
						       	<option value="2005">2005</option>
						       	<option value="2004">2004</option>
						       	<option value="2003">2003</option>
						       	<option value="2002">2002</option>
						       	<option value="2001">2001</option>
						       	<option value="2000">2000</option>
						       	<option value="1999">1999</option>
						       	<option value="1998">1998</option>
						       	<option value="1997">1997</option>
						       	<option value="1996">1996</option>
						       	<option value="1995">1995</option>
						       	<option value="1994">1994</option>
						       	<option value="1993">1993</option>
						       	<option value="1992">1992</option>
						       	<option value="1991">1991</option>
						       	<option value="1990">1990</option>
					        </select>
					    </div>
				    </div>

					<label for="username"><b>Username</b></label>
					<input class="form-control" id="username" type="text" name="username" required>
					
					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" style="background-color:#3A3845; width : 100%; border-radius : 10px;" type="submit" id="register" name="create" value="Sign Up">
					<a href="login.php" class="login1" style="color:black; text-align : center;">Sudah Punya Akun? Login Sekarang</a>
				</div>
			</div>
		</div>
	</form>
</div>


</body>
</html>