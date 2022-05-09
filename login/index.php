<!DOCTYPE html>
<html>
<head>
	<title>Login Portal | Kabupaten Tegal</title>
	<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans'rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Exo:100,200,400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="../assets/images/logotegal.png" type="image/x-icon">
	
<style>
body {
    background: url('../assets/images/patungtegal.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
    
}

.logo {
    width: 213px;
    height: 36px;
    background: url('../assets/images/logotegal.png') no-repeat;
    margin: 0px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #87CEFA;
    height: 370px;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 10px auto;
    
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
    
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}



.login-block input[type=submit] {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block input[type=submit]:hover {
    background: #ff7b81;
}

.pembungkusnotif{
    background-color: #FF4500;
    width: 500px;
    margin: 2px auto;
    border-radius: 5px;
}

.notif{
    text-align: center;
    color: white;
    font-size: 21px;
    font-family: arial;
}

</style>
</head>
<body>
	
	<br/>
	<!-- cek pesan notifikasi -->
    <div class="pembungkusnotif">
    <div class="notif">
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
    </div>
    </div>

	<br/>
	<br/>
	<form method="post" action="cek_login.php">

	



		<div class="logo"></div>
		<div class="login-block">
			<h1>Login <br>Website Kabupaten Tegal</h1>
            <img src="../assets/images/logotegal.png" style="height: 90px; width: 150px; margin: 2px 85px;">
			<input type="text"  placeholder="Username" id="username" name="username"/>
			<input type="password"  placeholder="Password" id="password" name="password" />
			<input type="submit" value="LOGIN">
			
		</div>


				
	</form>
</body>
</html>