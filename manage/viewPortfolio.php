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

<script language="javascript">
function confirmation()
{
 var ret;
 ret=confirm("Are you sure? Press OK to confirm else press Cancel");
 return ret;
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
	<h3>View Portfolio</h3>
	

     	<form name="form" id="form" method="post" action="#">
  <?php if(isset($_GET['sucessdel'])) { ?>
<table align="center"><tr align="center"><td align="center" style="color:#FF0000"><div class="sukses"><?php echo $_GET['sucessdel']; ?></div></td></tr></table><?php } ?>
  <?php if(isset($_GET['errordel'])) { ?>
<table align="center"><tr align="center"><td align="center" style="color:#FF0000"><div class="gagal"><?php echo $_GET['errordel']; ?></div></td></tr></table><?php } ?>
         <?php
    if(isset($_GET['pagenum']))
	{
	$pagenum=$_GET['pagenum'];
	}
	if(!(isset($_GET['pagenum'])))
	 {
	  $pagenum=1;
	 }
	
    $i=($pagenum-1)*5+1;
 $data = $con->select("SELECT * FROM `trendmaker_portfolio` ORDER BY `portfolio_id` DESC", true); 
	$rows=count($data);
	if($rows!=0)
	{
   $page_rows=6;
   $last=ceil($rows/$page_rows);
   if($pagenum<1)
     $pagenum=1;
   elseif($pagenum > $last)
     $pagenum=$last;
   $max='limit ' .($pagenum-1) * $page_rows.','.$page_rows;
   $i=($pagenum-1) * $page_rows;
   $datas=  $con->select("SELECT * FROM `trendmaker_portfolio`  ORDER BY `portfolio_id` DESC $max", true);?>
    <table width="691" style="margin-top:30px;">
    <tr><td width="688" colspan="5" align="right"><font face="Arial" style="font-size: 12px" color="#00CC00"><b> <span style="font-size: 12px">--Page 
	<?php echo $pagenum; ?> of <?php echo $last; ?>-- </span> </b> </font></td></tr></table>  
    
		<table class="data">
<tr class="data">
				<th class="data">No</th>
				<th class="data">Website</th>
				<th class="data">Link</th>
				<th class="data">Project</th>
				<th class="data" width="75px"></th>
		  </tr>
       
			  <?php
		foreach($datas as $va) {
			$portfolio_project=$va['portfolio_project'];
		$i++;	
		?>
			<tr class="data">
				<td class="data" align="center"><?php echo $i; ?></td>
				<td class="data" align="center"><?php echo $va['portfolio_title']; ?></td>
				<td class="data" align="justify"><?php echo $va['portfolio_link']; ?></td>
				<td class="data" align="center"><?php if($portfolio_project!="") { ?><img src="../portfolio/thumbs/<?php echo $portfolio_project; ?>" width="135" height="80" />
				<?php  } else { ?> <img src="portfolio/thumbs/noimage.jpg"  width="135" height="80" /> <?php } ?></td>
				<td class="data" width="75px">
				<center>
				<a href="editPortfolio.php?portfolio_id=<?php echo $va['portfolio_id'];?>"><img src="mos-css/img/oke.png"></a>&nbsp;&nbsp;&nbsp;
				<a href="action/viewPortfolio.php?portfolio_id=<?php echo $va['portfolio_id']; ?>" onClick="return confirmation();"><img src="mos-css/img/detail.png"></a>
				</center>
				</td> 
			</tr>
			<?php  } ?>
		</table>
        
      <table width="627" align="left">
     <tr align="center">
       <td width="15" align="center">&nbsp;</td>
              <td width="600"><span style="font-size: 12px">
          <p align="right">       <?php
		if ($pagenum == 1) ///checking is it in 1st page
		{
		} 
	  else {
			$previous = $pagenum-1;
			echo " <a href='viewPortfolio.php?pagenum=$previous' style='text-decoration:none'>"?> 
                <img src="mos-css/images/previous.png" width="30" height="30" /><?php "</a> ";
		 if($pagenum!=$last)
		   echo "&nbsp;".""."&nbsp;";
	  }
		?>
                <?php
		if ($pagenum == $last)  ///checking is it in last page
			{
			} 
			else {
			$next = $pagenum+1;
		echo " <a href='viewPortfolio.php?pagenum=$next' style='text-decoration:none'>"?> 
                <img src="mos-css/images/last.png" width="30" height="30" /><?php "</a> ";
			}
		?></p>
              </span>  </td>
     </tr>
   </table>
<?php 
	}
	else
	{?>
    	<div class="value">
    	No Portfolio added yet.</div>
    <?php }?>
     </form>

	</div>
<div class="clear"></div>
<div id="footer">
</div>
</div>
</body>
</html>