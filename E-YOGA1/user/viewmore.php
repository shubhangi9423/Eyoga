<?php include("config.php");

session_start();
$a=$_GET["clid"];
if(isset($_POST["btnsubmit"]))
{
extract($_POST);
$qqq=mysql_query("insert into addcart(clid,emailid)values('$a','".$_SESSION['emailid']."')");
header("location:addtocart.php");
}
?>

<?php
extract($_POST);

$qry=mysql_query("select * from tblcloth where clid=".$_GET['clid']);
 while($r=mysql_fetch_array($qry))
{
?>
<form method="post">
<table  bordercolor="#000000" align="center" height="500" width="800">
<tr>
<td>
<div class="image view view-first">
<img src="../admin/uploads/cloth/<?=$r["cimage"]?>" height="400px" width="400px"  style="margin-left:5%">
</div>
<table>
<tr><font size="+2"><b>Cloth id-<?=$r["clid"]?></b></font></tr></br>
<tr><font size="+2"><b>Cloth type-<?=$r["cloth"]?></b></font></tr></br>
<tr><font size="+2"><b>Original Price:<?=$r["cprice"]?></b></font></tr></br>
<tr><font size="+2"><b>Discount Price:<?=$r["cdprice"]?></b></font></tr></br>
<tr><input type="submit" name="btnsubmit" value="AddToCart" class="btn btn-success" /></tr>
</tr>
</table>
</td>
</tr>
</table>
</form>
<?php
}
?>
