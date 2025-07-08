<?php
require_once '../../includes/checkLogin.php';
require_once '../../includes/MysqlConnect.php';
require_once '../../includes/resize-class.php';
$con = MysqlConnect::getInstance();
$error01="invalid";
$sucess="invalid";
$erroradd="invalid";
	if(isset($_POST['submit']))
	{
	$portfolio_id=$_POST['portfolio_id'];
	$title=$_POST['title'];
	$link=$_POST['link'];
    $file = $_FILES['file']['name'];
	date_default_timezone_set('Asia/Calcutta');
	$datetime= date('Y-m-d h-i-s');
 if ((empty($title))) {
        $error01 = 'Fields marked with * are mandatory';
    } else {
            $data = array('portfolio_title' => $title , 'portfolio_link' => $link, 'portfolio_datetime' => $datetime);
					$where="portfolio_id= '".$portfolio_id."' ";
					$upd=$con->update("trendmaker_portfolio",$data,$where);
					 if ($upd == '1') {
						$sucess = 'Successfully Updated';
					 } 
 if(!empty($file)) {
  if($_FILES['file']['size']<=80000000)
  {
	function _get_extension($filename) {
    if (($pos = strrpos($filename, '.')) === false) {
        return '';
    }
    return substr($filename, $pos, strlen($filename));
	}
      $exp = _get_extension($file);
      $filename = 'image_' . time() . rand(1000, 9999) . $exp;
		
			 $path = '../../portfolio/' . $filename;
			$uploadpathBig = '../../portfolio/thumbs/' . $filename;
	
	    $sel8 = $con->select("SELECT * FROM `trendmaker_portfolio` WHERE `portfolio_id` = " . $portfolio_id . " ", true);
			foreach($sel8 as $va8) {
				$portfolio_project = $va8['portfolio_project'];
	if($va8['portfolio_project']){
		if (file_exists("..\\..\\portfolio\\".$va8['portfolio_project']))
			unlink("..\\..\\portfolio\\".$va8['portfolio_project']);
		if (file_exists("..\\..\\portfolio\\thumbs\\".$va8['portfolio_project']))
			unlink("..\\..\\portfolio\\thumbs\\".$va8['portfolio_project']);
		}
	}
			    if (move_uploaded_file($_FILES["file"]["tmp_name"], $path)) {
                copy($path, $uploadpathBig);
                $resizeObj = new resize($uploadpathBig);
                $resizeObj->resizeImage(240, 160, 'exact');
                $resizeObj->saveImage($uploadpathBig, 100);
				}
            $data = array('portfolio_title' => $title , 'portfolio_link' => $link , 'portfolio_project' => $filename , 'portfolio_datetime' => $datetime);
					$where="portfolio_id= '".$portfolio_id."' ";
					$upd=$con->update("trendmaker_portfolio",$data,$where);
					 if ($upd == '1') {
						$sucess = 'Successfully Updated';
					 } 
					else {
						$erroradd = 'Not Updated';
					} 
				}
				}
				}
if($error01!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../editPortfolio.php?&error01=$error01+&portfolio_id=$portfolio_id';</script>";	  
  }
if($sucess!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../editPortfolio.php?&sucess=$sucess+&portfolio_id=$portfolio_id';</script>";	  
  }
if($erroradd!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../editPortfolio.php?&erroradd=$erroradd+&portfolio_id=$portfolio_id';</script>";	  
  }
}
?>