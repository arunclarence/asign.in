<?php
@session_start();
require_once '../includes/MysqlConnect.php';
$con = MysqlConnect::getInstance();
			 
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql=$con->select("SELECT * FROM `trendmaker_admin` WHERE `admin_username` = ".MysqlConnect::dbEscape($username), false); 
	if($sql=="") {
		$error='Invalid Login';	}
	else {
	if($sql['admin_password'] != sha1($password)) {
	$error='Invalid Login';	}
	else {
	$_SESSION['admin_id']=$sql['admin_id'];
	header("location:admin.php"); } }
}
?>
<html>
<head>
<title>Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<div id="header">
	<div class="inHeaderLogin"></div>
</div>

<div id="loginForm">	
	<div class="headLoginForm">
	Login Administrator
	</div>
	<div class="fieldLogin">
                       <?php
	 if(isset($error))
	 {
	?>
                        
                     <span style="color:#FF0000"><b><script type="text/javascript">alert("Invalid Login");</script></b></span>
   <?php
	}
	?>


    <form action="" method="post" class="niceform" onSubmit="return submit1()">
	<label>Username</label><br>
	<input type="text" name="username" id="username" class="login"><br>
	<label>Password</label><br>
	<input type="password" name="password" id="password" class="login"><br>
	<input type="submit" class="button" name="submit" id="submit" value="Login">
	</form>
	</div>
</div>
</body>
</html>