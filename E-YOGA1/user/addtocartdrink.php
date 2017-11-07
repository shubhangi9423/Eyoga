<?php
error_reporting(null);
?>
<form method="post">
<table bordercolor="#000000"  height="300" width="900" cellpadding="2" cellspacing="3" align="center">
<tr>
<tr>
<th>
DrinkName
</th>
<th>
Drink Price
</th>
<th>
Discount Price
</th>
<th>
Select
</th>
</tr>
<?php include("config.php");
session_start();
$qry=mysql_query("select * from addcart where emailid='".$_SESSION["uemail"]."'");
while($r=mysql_fetch_array($qry))
{
extract($r);
$abc=$r["clid"];
$q="select * from tbldrink where drid=$abc";

$qry1=mysql_query("select * from tbldrink where drid=$abc");
while($r1=mysql_fetch_array($qry1))
{
	extract($r1);
	?>
    <tr>
    <td align="center"><?=$r1["drink"]?></td>
        <td align="center"><?=$r1["dprice"]?></td>
			<td align="center"><?=$r1["cdprice"]?></td><br>
            <a href="edit.php?id=<?=$r1['drid']?>" class="fancybox fancybox.iframe" style="size:50%">
			<td><a href="editshop.php?id=<?=$r['drid']?>""><input type="button" value="Select" class="btn btn-success"></td></tr></a>    
    
    <?php
}
?>

<?php
}
$total=$r['disprice'];
?>
</table>
</form>
?>