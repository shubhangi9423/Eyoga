<?php include("config.php");
error_reporting(null);
session_start();
$a=$_GET["id"];

echo $_SESSION["uemail"];
if(isset($_POST["btnsubmit"]))
{
echo "hi";
extract($_POST);
$qry=mysql_query("insert into addcart(clid,emailid) values('$a','".$_SESSION["uemail"]."')");
header("location:addtocart.php");
}

 ?>


<?php
extract($_POST);

$qry=mysql_query("select * from tblcloth where clid=".$_GET['id']);
 while($r=mysql_fetch_array($qry))
{
?>
 <div class="image view view-first">
 <form method="post">
 <img src="../admin/uploads/cloth/<?=$r["cimage"]?>" height="400px" width="400px"  style="margin-left:5%"></>
 </div>
 <div class="item_add">ClothType- <?=$r["cloth"]?></div>
					<div class="item_add"> Price-<?=$r["cprice"]?></div>
					<div class="item_add"> DiscountPrice-<?=$r["cdprice"]?></div>
                   <input type="submit" name="btnsubmit" value="AddToCart" />
				   </form>
				   <?php
}
?>
