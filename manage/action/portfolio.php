<?php
require_once '../../includes/checkLogin.php';
require_once '../../includes/MysqlConnect.php';
require_once '../../includes/resize-class.php';
$con = MysqlConnect::getInstance();
$error01="invalid";
$sucess="invalid";
$erroradd="invalid";
$notupload="invalid";
$size="invalid";
if (isset($_POST['submit'])) {
	$title=$_POST['title'];
	$link=$_POST['link'];
    $file = $_FILES['file']['name'];
	date_default_timezone_set('Asia/Calcutta');
	$datetime= date('Y-m-d h-i-s');
    if ((empty($title)) || (empty($file))) {
        $error01 = 'Fields marked with * are mandatory';
    } else {
	        if ($_FILES['file']['size'] <=1000000) {
function _get_extension($filename) {
    if (($pos = strrpos($filename, '.')) === false) {
        return '';
    }
   return substr($filename, $pos, strlen($filename));
}
            $exp = _get_extension($file);
            $filename = 'image_' . time() . rand(1000, 9999) . $exp;
            $data = array('portfolio_title' => $title , 'portfolio_link' => $link , 'portfolio_project' => $filename , 'portfolio_datetime' => $datetime);
			 $path = '../../portfolio/' . $filename;
			$uploadpathBig = '../../portfolio/thumbs/' . $filename;
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $path)) {
                copy($path, $uploadpathBig);
                $resizeObj = new resize($uploadpathBig);
                $resizeObj->resizeImage(240, 160, 'exact');
                $resizeObj->saveImage($uploadpathBig, 100);
                $ins = $con->insert('trendmaker_portfolio', $data);
                if ($ins == '1') {
                    $sucess = 'Successfully Added';
                } else {
                    $erroradd = 'File not added, please try later';
                }
            } else {
                $notupload = 'File not uploaded, please try later';
            }
        } else {
            $size = 'Please upload file of size less than 800KB';
		}
    }
if($error01!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../portfolio.php?&error01=$error01';</script>";	  
  }
if($sucess!='invalid')	  	 
  {
    echo "<script language='javascript'ss>window.location='../portfolio.php?&sucess=$sucess';</script>";	  
  }
if($erroradd!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../portfolio.php?&erroradd=$erroradd';</script>";	  
  }
if($notupload!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../portfolio.php?&notupload=$notupload';</script>";	  
  }
if($size!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../portfolio.php?&size=$size';</script>";	  
  }
}
?>