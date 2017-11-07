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
<th>Title</th>
<th>Image</th>
<th>Content</th>
<th>Select</th>
</tr>
<tr>
<?php
$sql=mysql_query("Select * from tblnews order by nid DESC");
while($r=mysql_fetch_array($sql))
{
?>
    <tr>
	<td> <?php echo $r['nid'];?></td>
	<td> <?php echo $r['ntitle'];?></td>
	<td>
	<img src=<?php echo $r['nimage'];?> height="100px" width="100px"/>
	</td>
	<td> <?php echo $r['scontent'];?></td>
	

	
		<td><a href="editnews.php?id=<?=$r['nid']?>" class="fancybox fancybox.iframe" style="size:50%"><input type="button" value="Select" class="btn btn-success"></a>
      </tr>
	<?php
	}
	?>
</tr>
</tr>
</thead>
</table>
</form>
