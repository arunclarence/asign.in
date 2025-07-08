<?php
require_once '../../includes/checkLogin.php';
require_once '../../includes/MysqlConnect.php';
$con = MysqlConnect::getInstance();
$error="invalid";
$sucess="invalid";
$erroradd="invalid";
		if(isset($_POST['submit']))
			{
				$password=$_POST['password'];
				$newpassword=$_POST['newpassword'];
				$confirmpassword=$_POST['confirmpassword'];
				$sql=$con->select("SELECT * FROM `trendmaker_admin` WHERE `admin_password` = ".MysqlConnect::dbEscape(sha1($password)), false);
				$admin_password=$sql['admin_password'];
				if($admin_password != sha1($password))
				{
								$error = 'Wrong Existing Password';
				} else {
					$data=array('admin_password' => sha1($newpassword));
					$where="admin_password= '".sha1($password)."' ";
					$upd=$con->update("trendmaker_admin",$data,$where);
					 if ($upd == '1') {
						$sucess = 'Password Updated';
					 } else {
						$erroradd = 'Not Updated';
					} 
				}
if($error!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../changePassword.php?&error=$error';</script>";	  
  }
if($sucess!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../changePassword.php?&sucess=$sucess';</script>";	  
  }
if($erroradd!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../changePassword.php?&erroradd=$erroradd';</script>";	  
  }
}
?>