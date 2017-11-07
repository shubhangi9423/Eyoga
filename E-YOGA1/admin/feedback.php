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
<div  role="main">
      <div class="">
         <div class="page-title">
               <div class="title_left">
                 <h3>
                    Feedback Of user
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
						    <div class="col-md-12 col-sm-12 col-xs-12">
							
	
							<form method="post">
							
							<?php
							extract($_POST);
        $qry=mysql_query("select * from tblcontact ");
		 while($row= mysql_fetch_array($qry))
     {
	   extract($row);
?>	

    <div  role="main">
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
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">User Name<span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" value="<?=$row["username"]?>"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text-area">
       </div>
	   </div>
	   
	  <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">image<span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
	   <img src="../user/user/<?=$row["uimage"]?>" height="200px" width="200px"  style="margin-left:5%"></>
       </div>
	   </div>
	   
	 
      <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Comment<span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" value="<?=$row["comment"]?>"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text-area">
       </div>
	   </div>
	    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">mobile no.<span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" value="<?=$row["mobile"]?>"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
       </div>
	   </div>
	    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">emailid<span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" value="<?=$row["uemail"]?>"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
       </div>
	  
	   </div>
	 
	 
	   
	  
	
		<?php
		
		 include("footer.php");
		 ?>
       </div>
       </div>
       </div>
 <?php
 }
 
?>

 </body>
 </html>