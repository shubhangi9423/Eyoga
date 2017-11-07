<?php
error_reporting(null);
?>
<form method="post">
<table bordercolor="#000000"  height="300" width="900" cellpadding="2" cellspacing="3" align="center">
<tr>
<tr>
<th>
MatName
</th>
<th>
MatPrice
</th>
<th>
Dis.Price
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
$abc=$r["mtid"];
$q="select * from tblmat where mtid=$abc";

$qry1=mysql_query("select * from tblmat where mtid=$abc");
while($r1=mysql_fetch_array($qry1))
{
	extract($r1);
	?>
    <tr>
    <td align="center"><?=$r1["mat"]?></td>
        <td align="center"><?=$r1["mprice"]?></td>
			<td align="center"><?=$r1["mdprice"]?></td><br>
            <a href="edit.php?id=<?=$r1['mtid']?>" class="fancybox fancybox.iframe" style="size:50%">
			<td><a href="editshop.php?id=<?=$r['mtid']?>""><input type="button" value="Select" class="btn btn-success"></td></tr></a>    
    
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