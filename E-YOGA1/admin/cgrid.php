<html>
<head>
<?php
include("head.php");
include("fancy_head.php");
?>
</head>
<body>
<?php
include("config.php");
include("menu.php");
?>	

<form method="POST">
 <table class="table table-striped responsive-utilities jambo_table bulk_action">
  <thead>
<tr class="headings">
<th>Id</th>
<th>Male</th>
<th>Female</th>
<th>Cloth</th>
<th>Image</th>
<th>Price</th>
<th>Discount Price</th>
<th>Quantity</th>
<th>Select</th>
</tr>
<tr>
<?php
$sql=mysql_query("Select * from tblcloth order by clid DESC");
while($r=mysql_fetch_array($sql))
{
?>
    <tr>
	<td> <?php echo $r['clid'];?></td>
	<td> <?php echo $r['male'];?></td>
	<td> <?php echo $r['female'];?></td>
	<td> <?php echo $r['cloth'];?></td>
	<td>
	<img src=uploads/cloth/<?php echo $r['cimage'];?> height="100px" width="100px"/>
	</td>
	<td> <?php echo $r['cprice'];?></td>
	<td> <?php echo $r['cdprice'];?></td>
	<td> <?php echo $r['cquantity'];?></td>

	
		<td><a href="editcloth.php?id=<?=$r['clid']?>" class="fancybox fancybox.iframe" style="size:50%"><input type="button" value="Select" class="btn btn-success"></a>
      </tr>
	<?php
	}
	?>
</tr>
</tr>
</thead>
</table>
</form>
