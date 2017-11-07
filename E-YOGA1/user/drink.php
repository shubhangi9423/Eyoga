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
$qry=mysqli_query($con,"select * from tbldrink   order by drid desc limit 3");
   ?>
   <div class="wrapper">
   <div class="col-md-4">
              <h3 class="panel-title" style="color:#9966CC"><?=$r["drink"]?></h3>
             
           
   <div class="list_item" id="<?=$r["drid"]?>">
   <form method="post" action="login.php?id=<?=$r["drid"]?>">
   <table>
   <Tr>
   <td>
   
  <img src="../admin/uploads/cloth/<?=$r["dimage"]?>" height="200px" width="200px">
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
$qry=mysqli_query($con,"select * from tbldrink   order by drid desc limit 3");
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
   
  <img src=" ../admin/<?=$r["dimage"]?>" height="200px" width="200px">
   </td>
  <tr>
   
   <td><br/><b>Price-<?=$r["dprice"]?></b></td><br/>

    
   
   
   
   
  
   </tr>
   <tr>
   <td>
   
  
	 <a href="dispimg.php?id=<?=$r["drid"]?>"  class="fancybox fancybox.iframe"><input type="submit" class="btn btn-warning" col-span=2 align="center" value="View More" /></a>


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
		
<div class="foot-top">
	<div class="container">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h5>follow us on</h5>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
						<li><a href="#"><i class="pp"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							<form>
								<input type="text" placeholder="Enter your email to join our newsletter" required>
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" value="join">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 cust">
			<h4>CUSTOMER CARE</h4>
				<li><a href="#">Help Center</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="buy.html">How To Buy</a></li>
				<li><a href="#">Delivery</a></li>
		</div>
		<div class="col-md-2 abt">
			<h4>ABOUT US</h4>
				<li><a href="#">Our Stories</a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">Career</a></li>
				<li><a href="contact.html">Contact</a></li>
		</div>
		<div class="col-md-2 myac">
			<h4>MY ACCOUNT</h4>
				<li><a href="register.html">Register</a></li>
				<li><a href="#">My Cart</a></li>
				<li><a href="#">Order History</a></li>
				<li><a href="buy.html">Payment</a></li>
		</div>
		<div class="col-md-5 our-st">
			<div class="our-left">
				<h4>OUR STORES</h4>
			</div>
			<div class="our-left1">
				<div class="cr_btn">
					<a href="#">SOLO</a>
				</div>
			</div>
			<div class="our-left1">
				<div class="cr_btn1">
					<a href="#">BOGOR</a>
				</div>

</div>












