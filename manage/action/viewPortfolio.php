<?php
require_once '../../includes/checkLogin.php';
require_once '../../includes/MysqlConnect.php';
$con = MysqlConnect::getInstance();
$sucessdel="invalid";
$errordel="invalid";
if(isset($_GET['portfolio_id']))
{
		 if ($_GET['portfolio_id'] != 0) {
        $portfolio_id = $_GET['portfolio_id'];
		$sel = $con->select("SELECT * FROM `trendmaker_portfolio` WHERE `portfolio_id` = " . $portfolio_id . " ", false);
			if(empty($sel['portfolio_project'])) {
		 $where = "`portfolio_id` = '".$portfolio_id."' ";
        $sql = $con->delete("trendmaker_portfolio", $where);
        if ($sql == '1') {
            $sucessdel = 'Successfully Deleted';
        } 
			}
		else 
		{
		$path = '../../portfolio/'.$sel['portfolio_project'];
        $thumb = '../../portfolio/thumbs/'.$sel['portfolio_project'];
        if (file_exists($path)) {
            unlink($path);
            if (file_exists($thumb)) {
                unlink($thumb);
            }
        }
		        $where1 = "`portfolio_id` = '".$portfolio_id."' ";
        $sql1 = $con->delete("trendmaker_portfolio", $where1);
		    if ($sql1 == '1') {
            $sucessdel = 'Successfully Deleted';
        } 
		else {
            $errordel = 'Not deleted';
        }
}
}
if($sucessdel!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../viewPortfolio.php?&sucessdel=$sucessdel';</script>";	  
  }
if($errordel!='invalid')	  	 
  {
    echo "<script language='javascript'>window.location='../viewPortfolio.php?&errordel=$errordel';</script>";	  
  }
}
?>
