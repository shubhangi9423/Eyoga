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
<th>Drink</th>
<th>Image</th>
<th>Price</th>
<th>Discount Price</th>
<th>Quantity</th>
<th>Select</th>
</tr>
<tr>
<?php
$sql=mysql_query("Select * from tbldrink order by drid DESC");
while($r=mysql_fetch_array($sql))
{
?>
    <tr>
	<td> <?php echo $r['drid'];?></td>
	<td> <?php echo $r['drink'];?></td>
	<td>
	<img src=uploads/drink/<?php echo  $r['dimage'];?> height="100px" width="100px"/>
	</td>
	<td> <?php echo $r['dprice'];?></td>
	<td> <?php echo $r['ddprice'];?></td>
	<td> <?php echo $r['dquantity'];?></td>

	
		<td><a href="editdrink.php?id=<?=$r['drid']?>" class="fancybox fancybox.iframe" style="size:50%"><input type="button" value="Select" class="btn btn-success"></a>
      </tr>
	<?php
	}
	?>
</tr>
</tr>
</thead>
</table>
</form>
