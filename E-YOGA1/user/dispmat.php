<?php include("config.php");
error_reporting(null);
session_start();
$a=$_GET["id"];

echo $_SESSION["uemail"];
if(isset($_POST["btnsubmit"]))
{

extract($_POST);
$qry=mysql_query("insert into addcart(mtid,emailid) values('$a','".$_SESSION["uemail"]."')");
header("location:addtocartmat.php");
}

 ?>


<?php
extract($_POST);

$qry=mysql_query("select * from tblmat where mtid=".$_GET['id']);
 while($r=mysql_fetch_array($qry))
{
?>
 <div class="image view view-first">
 <form method="post">
 <img src="../admin/uploads/mat/<?=$r["mimage"]?>" height="400px" width="400px"  style="margin-left:5%"></>
 </div>
 <div class="item_add">ClothType- <?=$r["mat"]?></div>
					<div class="item_add"> Price-        <?=$r["mprice"]?></div>
					<div class="item_add"> DiscountPrice-<?=$r["mdprice"]?></div>
                   <input type="submit" name="btnsubmit" value="AddToCart" />
				   </form>
				   <?php
}
?>
