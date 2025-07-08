<?php
require_once '../includes/MysqlConnect.php';
$con = MysqlConnect::getInstance();
require_once '../includes/checkLogin.php';
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
<script language="javascript">
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
 }
}
function validate_form(thisform)
{
with (thisform)
  {
 if (validate_required(password,"Enter Current Password")==false)
  {password.focus();return false;}
  if (validate_required(newpassword,"Enter New Password")==false)
  {newpassword.focus();return false;}
  if (validate_required(confirmpassword,"Re Enter the Password")==false)
  {confirmpassword.focus();return false;}
  }
  if(document.form1.newpassword.value!=document.form1.confirmpassword.value)
  {
   alert("Password Missmatch");
   document.form1.confirmpassword.focus();
   return false;
  }
}

</script>

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
	<h3>Change Password</h3>
	

	    <form id="form1" name="form1" method="post" action="action/changePassword.php"  enctype="multipart/form-data" onSubmit="return validate_form(this)">
  <?php if(isset($_GET['error'])) { ?>
<table align="center"><tr align="center"><td align="center" style="color:#FF0000"><div class="gagal"><?php echo $_GET['error']; ?></div></td></tr></table><?php } ?>
  <?php if(isset($_GET['sucess'])) { ?>
<table align="center"><tr align="center"><td align="center" style="color:#FF0000"><div class="sukses"><?php echo $_GET['sucess']; ?></div></td></tr></table><?php } ?>
  <?php if(isset($_GET['erroradd'])) { ?>
<table align="center"><tr align="center"><td align="center" style="color:#FF0000"><div class="gagal"><?php echo $_GET['erroradd']; ?></div></td></tr></table><?php } ?>
 

		<table width="95%">
			
			<tr><td><b>Current  Password :</b></td><td><input type="password" name="password" id="password" class="panjang"  /></td></tr>
			<tr><td><b>New Password :</b></td><td><input type="password" name="newpassword" id="newpassword" class="panjang"  /></td></tr>
			<tr><td><b>Re-type Password :</b></td><td><input type="password" name="confirmpassword" id="confirmpassword" class="panjang"  /></td></tr>
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