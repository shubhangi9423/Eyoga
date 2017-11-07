<?php include("config.php");
error_reporting(null);
session_start();
$a=$_GET["id"];

echo $_SESSION["uemail"];
if(isset($_POST["btnsubmit"]))
{

extract($_POST);
$qry=mysql_query("insert into addcart(clid,emailid) values('$a','".$_SESSION["uemail"]."')");
header("location:addtocartdrink.php");
}

 ?>


<?php
extract($_POST);

$qry=mysql_query("select * from tbldrink where drid=".$_GET['id']);
 while($r=mysql_fetch_array($qry))
{
?>
 <div class="image view view-first">
 <form method="post">
 <img src="../admin/uploads/drink/<?=$r["dimage"]?>" height="400px" width="400px"  style="margin-left:5%"></>
 </div>
 <div class="item_add"><h6>ClothType- <?=$r["drink"]?></h6></div>
					<div class="item_add"><h6> Price-<?=$r["dprice"]?></h6></div>
					<div class="item_add"><h6> DiscountPrice-<?=$r["cdprice"]?></h6></div>
                   <input type="submit" name="btnsubmit" value="AddToCart" />
				   </form>
				   <?php
}
?>
