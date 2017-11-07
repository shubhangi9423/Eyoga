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
<th>Mat</th>
<th>Image</th>
<th>Price</th>
<th>Discount Price</th>
<th>Quantity</th>
<th>Select</th>
</tr>
<tr>
<?php
$sql=mysql_query("Select * from tblmat order by mtid DESC");
while($r=mysql_fetch_array($sql))
{
?>
    <tr>
	<td> <?php echo $r['mtid'];?></td>
	<td> <?php echo $r['mat'];?></td>
	<td>
	<img src=uploads/mat/<?php echo $r['mimage'];?> height="100px" width="100px"/>
	</td>
	<td> <?php echo $r['mprice'];?></td>
	<td> <?php echo $r['mdprice'];?></td>
	<td> <?php echo $r['mquantity'];?></td>

	
		<td><a href="editmat.php?id=<?=$r['mtid']?>" class="fancybox fancybox.iframe" style="size:50%"><input type="button" value="Select" class="btn btn-success"></a>
      </tr>
	<?php
	}
	?>
</tr>
</tr>
</thead>
</table>
</form>
