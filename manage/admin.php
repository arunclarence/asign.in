<?php
require_once '../includes/checkLogin.php';
require_once '../includes/MysqlConnect.php';
$con = MysqlConnect::getInstance();
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
	<div class="inHeader">
		<div class="mosAdmin">
		<a href="admin.php">Welcome Admin</a><br>
		<a href="">Visit website</a> | <a href="logout.php">Logout</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="portfolio.php">Add Portfolio</a></li>
		<li><a href="viewPortfolio.php">View Portfolio</a></li>
		<li><a href="changePassword.php">Change Password</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<h3>Welcome Admin</h3>
	</div>
<div class="clear"></div>
<div id="footer">
</div>

</div>
</body>
</html>