<html>
<?php include("configi.php");
include("header.php");

include("menu.php");

include("fancy.php");

?>
<link href="mystyle.css" rel="stylesheet">
<style>
img
{
	float:right;
}
</style>
<script src="lazy.js"></script>

<body>
<!-- content -->
<div class="grid_3 grid_5">
				 <h3>Tabs</h3>
				   <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
			  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">Home</a></li>
			  <li role="presentation" class=""><a href="drink.php" role="tab" id="profile-tab"  aria-controls="profile" aria-expanded="false">Profile</a></li>
			  <li role="presentation" class=""><a href="mat.php" role="tab" id="profile-tab"  aria-controls="profile" aria-expanded="false">Profile</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
			  <div role="tabpanel" class="tab-pane fade" id="home" aria-labelledby="home-tab">
				<p>
				<div class="panel panel-default">
                 <div class="panel-body">
<div class="container">
<div class="women_main">
	<!-- start sidebar -->
	<div class="col-md-3 s-d">
	  <div class="w_sidebar">
		<div class="w_nav1">
		<form method="post">
		<input type="text" name="txtsearching" class="form-control">
		<input type="submit" class="btn btn-success" name="btnsearch">
		</form>
		</div>
		
	</div>
   </div>
	<!-- start content -->
	<div class="col-md-9 w_content">
		<div class="women">
			<a href="#"><h4>Enthecwear - <span>4449 itemms</span> </h4></a>
			<ul class="w_nav">
						<li>Sort : </li>
		     			<li><a class="active" href="#">popular</a></li> |
		     			<li><a href="#">new </a></li> |
		     			<li><a href="#">discount</a></li> |
		     			<li><a href="#">price: Low High </a></li> 
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>
<div class="mydiv">
<div class="row">


<?php
if(isset($_POST["btnsearch"]))
{
extract($_POST);
$qry=mysqli_query($con,"select * from tblcloth   order by clid desc limit 3");
   ?>
   <div class="wrapper">
   <div class="col-md-4">
              <h3 class="panel-title" style="color:#9966CC"><?=$r["cloth"]?></h3>
             
           
   <div class="list_item" id="<?=$r["clid"]?>">
   <form method="post" action="login.php?id=<?=$r["clid"]?>">
   <table>
   <Tr>
   <td>
   
  <img src="../admin/uploads/cloth/<?=$r["cimage"]?>" height="200px" width="200px">
   </td>
</Tr>
  <tr>

</Tr>
</table>
</form>
</div>
</div>
</div>
<?php
}
$qry=mysqli_query($con,"select * from tblcloth   order by clid desc limit 3");
$total=mysqli_num_rows($qry);
if($total>0)
{
while($r=mysqli_fetch_assoc($qry))
{
	$id=$r["clid"];
   ?>
   <div class="wrapper">
   <div class="col-md-4">
              <h3 class="panel-title" style="color:#9966CC"><?=$r["cloth"]?></h3>
             
           
   <div class="list_item" id="<?=$r["clid"]?>">
   <form method="post" action="login.php?id=<?=$r["clid"]?>">
   <table>
   <Tr>
   <td>
   
  <img src=" ../admin/<?=$r["path"]?>" height="200px" width="200px">
   </td>
  <tr>
   
   <td><br/><b>Price-<?=$r["cprice"]?></b></td><br/>

    
   
   
   
   
  
   </tr>
   <tr>
   <td>
   
  
	 <a href="dispimg.php?id=<?=$r["clid"]?>"  class="fancybox fancybox.iframe"><input type="submit" class="btn btn-warning" col-span=2 align="center" value="View More" /></a>


   </td>
   </tr>
   
    
   </table>
  </form>
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
</div>
</div>
</div>
		







