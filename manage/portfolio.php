<?php
require_once '../includes/checkLogin.php';
require_once '../includes/MysqlConnect.php';
require_once '../includes/resize-class.php';
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
	<h3>Add Portfolio</h3>
	

	    <form id="form1" name="form1" method="post" action="action/portfolio.php"  enctype="multipart/form-data" >
  <?php if(isset($_GET['error01'])) { ?>
<table align="center"><tr align="center"><td align="center" style="color:#FF0000"><div class="informasi"><?php echo $_GET['error01']; ?></div></td></tr></table><?php } ?>
  <?php if(isset($_GET['sucess'])) { ?>
<table align="center"><tr align="center"><td align="center" style="color:#FF0000"><div class="sukses"><?php echo $_GET['sucess']; ?></div></td></tr></table><?php } ?>
  <?php if(isset($_GET['erroradd'])) { ?>
<table align="center"><tr align="center"><td align="center" style="color:#FF0000"><div class="gagal"><?php echo $_GET['erroradd']; ?></div></td></tr></table><?php } ?>
  <?php  if(isset($_GET['notupload'])) { ?>
<table align="center"><tr align="center"><td align="center" style="color:#FF0000"><div class="gagal"><?php echo $_GET['notupload']; ?></div></td></tr></table><?php } ?>
  <?php if(isset($_GET['size'])) { ?>
<table align="center"><tr align="center"><td align="center" style="color:#FF0000"><div class="gagal"><?php echo $_GET['size']; ?></div></td></tr></table><?php } ?>
 

		<table width="95%">
			<tr>
			  <td><b>Website : <span style="color:#F00">*</span></b></td><td><input type="text" name="title" id="title" class="panjang"></td></tr>
			<tr>
			  <td><b>Website Link : <span style="color:#F00">*</span></b></td><td><input type="text" name="link" id="link" class="panjang"></td></tr>
			<tr>
			  <td><b>Project : <span style="color:#F00">*</span></b></td><td><input type="file" name="file" id="file"></td></tr>
			<tr><td></td><td>
			<input type="submit" name="submit" id="submit" class="button" value="Submit">
			<input type="reset" name="reset" id="reset" class="button" value="Reset">
			</td></tr>
		</table>       
        </form>
	</div>
<div class="clear"></div>
<div id="footer">
</div>
</div>
</body>
</html>