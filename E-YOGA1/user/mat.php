<html>
<style>
.wrapper
{
margin-left:15%;
margin-right:15%;
}
</style>
<head>
<link href="mystyle.css" rel="stylesheet">
<?php include("fancy.php");?>
<?php include("configi.php");?>
<?php include("menu.php");?>

<?php include("header.php");?>

<style>
img
{
	float:right;
}
</style>
<script src="lazy.js"></script>

<title>
</title>
</head>
<body>
<?php include("header.php");?>
<div class="mydiv">
<div class="row">


<?php

$qry=mysqli_query($con,"select * from tblmat  order by mtid desc limit 3");
$total=mysqli_num_rows($qry);
if($total>0)
{
while($r=mysqli_fetch_assoc($qry))
{
	$id=$r["mtid"];
   ?>
   <div class="arriv-bottm">
 <div class="list_item" id="<?=$r["mtid"]?>">
   <form method="post" action="login.php?id=<?=$r["mtid"]?>">
   <table>
   <Tr>
   <td>
   <div class="col-md-8 arriv-left1">
   
  <img src=" ../admin/uploads/mat/<?=$r["mimage"]?>" height="300px" width="400px">
   </td>
  <tr>
   <div class="arriv-info1" >
   <td><br/><b><h6>Price-<?=$r["mprice"]?></h6></b></td>
  </tr>
   <tr>
   <td>
    <a href="dispmat.php?id=<?=$r["mtid"]?>"  class="fancybox fancybox.iframe">
	<input type="submit" class="btn btn-warning" col-span=2 align="center" value="View More" /></a>
  </td>
   </tr>
    </table>
  </form>
    </div>
          </div>
   </div>
   </div>
   </div>
<?php
}
?>
</div>
<div class="show_more_main" id="show_more_main<?php echo $id; ?>">
                <span id="<?php echo $id; ?>" class="show_more" title="Load more posts">Show more</span>
                <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
            </div>

<?php
}

?>



</div>

</body>
</html>