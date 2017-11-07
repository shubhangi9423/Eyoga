<html>
<head>
<?php
include("head.php");
?>
</head>
<body>
<?php
include("config.php");
include("menu.php");
?>	
<?php
     $did = $_GET['id']; 
	 $result = mysql_query("select * from tbldrink where drid =".$_GET['id']);
	 
	 while($row= mysql_fetch_array($result))
     {
	   extract($row);
?>	

    <div  role="main">
      <div class="">
         <div class="page-title">
               <div class="title_left">
                 <h3>
                    DRINKS
                 </h3>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-6col-sm-6 col-xs-12 animated fadeInDown">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
         <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                                
								
								
	<div class="x_content">
	 <form  method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" >
	 
      <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Add Drink Type<span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" value="<?=$row["drink"]?>"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
       </div>
	   </div>
	   
	   <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Choose Image To Upload <span class="required">*</span>
            </label>
			<div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" disabled="disabled" value="<?=$row["dimage"]?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="m1" required="required" type="text">
       </div>
	   
          <div class="col-md-3 col-sm-3 col-xs-6">
		  <?php
		  $qry=mysql_query("select * from tbldrink ");
		  ?>
            <select class="form-control" name="m1">
			<?php
			
			while($r1=mysql_fetch_array($qry))
            {
              extract($r1);
   
             ?>
             <option value="<?=$r1['dimage']?>"><?=$r1["dimage"]?></option>
             
			 <?php
			 }
			 ?> 
			 </select>                               
            </div>
			</div>
		   
	  
	 <div class="item form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price <span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name"  value="<?=$row["dprice"]?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="price" required="required" type="text">
       </div>
	   </div>
	    <div class="item form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Discount Price<span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" value="<?=$row["ddprice"]?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="discountprice" required="required" type="text">
       </div>
	   </div>
	    <div class="item form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Quantity <span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" value="<?=$row["dquantity"]?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="qty" required="required" type="text">
       </div>
	 </div>
       <div class="ln_solid"></div>
       <div class="form-group">                             
       <div class="col-md-6 col-md-offset-3" style="margin-left:30%">
 <input type="submit" class="btn btn-success" name="btnupdate" value="Update">
 <input type="submit" class="btn btn-danger" name="btndelete" value="Delete" >
       </div>
        </div>
	   </form>
	   </div>
       </div>
	    <?php
		 include("footer.php");
		 ?>
       </div>
       </div>
       </div>
       </div>
 			
		<?php
		}
		?>
 <?php
 			
 if(isset($_POST['btnupdate']))
{
extract($_POST);

$result="UPDATE tbldrink
          SET drink='$name',
		      dimage='$m1',
              dprice='$price',
			  ddprice='$discountprice',
			  dquantity='$qty'
			  WHERE 

          drid=".$_GET['id'];
mysql_query($result);


}
?>
<?php
 			
 if(isset($_POST['btndelete']))
{
extract($_POST);
$result="delete from  tbldrink  where drid=".$_GET["id"];
mysql_query($result);
}
?>

 
		
</body>
</html>
			
			
			
			
			
			
			