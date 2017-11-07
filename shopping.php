<html>
<head>
<?php
include("header.php");
include("configi.php");
include("fancy.php");
?>
</head>
<link href="mystyle.css" rel="stylesheet">
<style>
img
{
	float:right;
}
</style>
<script src="lazy.js"></script>
<body>
<?php
include("menu.php");
?>


 <div class="grid_3 grid_5" align="center">
				 <h1><i>Shopping</i></h1>
				   <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
			<li role="presentation" class="dropdown">
				<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">CLOTHS <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
				  <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Ladies</a></li>
				  <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Gents</a></li>
				  </ul>
			   <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">MATS</a></li>
			  <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">DRINKS</a></li>
			  
				
			  </li>

			</ul>
			<div id="myTabContent" class="tab-content">
			  <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
				<p>
				
				
				<div class="panel panel-default">
           
            <div class="panel-body">
			
			
			<div class="container">
<div class="women_main">
	<!-- start sidebar -->
	
	<!-- start content -->
	<div class="col-md-12 w_content">
		
<div class="mydiv">
<div class="row">


<?php
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
   <div class="panel panel-default">
            
            <div class="panel-body">
  <img src=" ../admin/uploads/cloth/<?=$r["cimage"]?>" height="200px" width="200px">
 </div>
			  </div> 
   </td>
  <tr>
   
   <td><br/><b>Price-<?=$r["cprice"]?></b></td><br/>

    
   
   
   
   
  
   </tr>
   <tr>
   <td>
   
  
	 <a href="viewmore.php?id=<?=$r["clid"]?>"  class="fancybox fancybox.iframe"><input type="submit" class="btn btn-warning" col-span=2 align="center" value="View More" /></a>


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
			
			
              </div>
			  </div> 
			  
			  
				</p>
			  </div>
			  
			  
			  
			   <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
				<p>
				
				<div class="panel panel-default">
           
            <div class="panel-body">
			
			
			<div class="container">
<div class="women_main">
	<!-- start sidebar -->
	
	<!-- start content -->
	<div class="col-md-12 w_content">
		
<div class="mydiv">
<div class="row">

<?php
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
   <div class="panel panel-default">
            
            <div class="panel-body">
  <img src=" ../admin/uploads/cloth/<?=$r["cimage"]?>" height="200px" width="200px">
 </div>
			  </div> 
   </td>
  <tr>
   
   <td><br/><b>Price-<?=$r["cprice"]?></b></td><br/>

    
   
   
   
   
  
   </tr>
   <tr>
   <td>
   
  
	 <a href="viewmore.php?id=<?=$r["clid"]?>"  class="fancybox fancybox.iframe"><input type="submit" class="btn btn-warning" col-span=2 align="center" value="View More" /></a>


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
			
			
              </div>
			  </div> 
			  
			  
				</p>
				</div>
			  
			  
			  <div role="tabpanel" class="tab-pane fade" id="home" aria-labelledby="home-tab">
				<p>
				
				
				<div class="panel panel-default">
                <div class="panel-body">
				
			
			<div class="container">
<div class="women_main">
	<!-- start sidebar -->
	
	<!-- start content -->
	<div class="col-md-12 w_content">
		
<div class="mydiv">
<div class="row">

<?php
$qry=mysqli_query($con,"select * from tblmat order by mtid desc limit 3");
$total=mysqli_num_rows($qry);
if($total>0)
{
while($r=mysqli_fetch_assoc($qry))
{
	$id=$r["mtid"];
   ?>
   <div class="wrapper">
   <div class="col-md-4">
              <h3 class="panel-title" style="color:#9966CC"><?=$r["mat"]?></h3>
             
           
   <div class="list_item" id="<?=$r["mtid"]?>">
   <form method="post" action="login.php?id=<?=$r["mtid"]?>">
   <table>
   <Tr>
   <td>
   <div class="panel panel-default">
            
            <div class="panel-body">
  <img src=" ../admin/uploads/mat/<?=$r["mimage"]?>" height="200px" width="200px">
 </div>
			  </div> 
   </td>
  <tr>
   
   <td><br/><b>Price-<?=$r["mprice"]?></b></td><br/>

    
   
   
   
   
  
   </tr>
   <tr>
   <td>
   
  
	 <a href="viewmore.php?id=<?=$r["mtid"]?>"  class="fancybox fancybox.iframe"><input type="submit" class="btn btn-warning" col-span=2 align="center" value="View More" /></a>


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
              </div>
			  </div>
				
				
				
				</p>
				</div>
			  
			  <div role="tabpanel" class="tab-pane fade active in" id="profile" aria-labelledby="profile-tab">
				<p>
				<div class="container">
<div class="women_main">
	<!-- start sidebar -->
	
	<!-- start content -->
	<div class="col-md-12 w_content">
		
<div class="mydiv">
<div class="row">

<?php
$qry=mysqli_query($con,"select * from tbldrink  order by drid desc limit 3");
$total=mysqli_num_rows($qry);
if($total>0)
{
while($r=mysqli_fetch_assoc($qry))
{
	$id=$r["drid"];
   ?>
   <div class="wrapper">
   <div class="col-md-4">
              <h3 class="panel-title" style="color:#9966CC"><?=$r["drink"]?></h3>
             
           
   <div class="list_item" id="<?=$r["drid"]?>">
   <form method="post" action="login.php?id=<?=$r["drid"]?>">
   <table>
   <Tr>
   <td>
   <div class="panel panel-default">
            
            <div class="panel-body">
  <img src=" ../admin/uploads/drink/<?=$r["dimage"]?>" height="200px" width="200px">
 </div>
			  </div> 
   </td>
  <tr>
   
   <td><br/><b>Price-<?=$r["dprice"]?></b></td><br/>

    
   
   
   
   
  
   </tr>
   <tr>
   <td>
   
  
	 <a href="viewmore1.php?id=<?=$r["drid"]?>"  class="fancybox fancybox.iframe"><input type="submit" class="btn btn-warning" col-span=2 align="center" value="View More" /></a>


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
				
				</p>
				</div>
			 
		 
		 
		   </div>
		   </div>
		  </div>

</body>
</html>