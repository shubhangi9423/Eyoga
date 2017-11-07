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
                    CLOTHS
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
	 <form action="cupload.php" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" >
	 <div class="item form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Select Gender <span class="required">*</span>
        </label>                                       
        <div class="col-md-6 col-sm-6 col-xs-12">
         <tr>
		  <td class="a-center ">                       
          <input type="checkbox" id="check-all" class="flat" name="male" value="<?php echo('male'==1 ? 'checked' : '1');?>" >
           </td>
			<td>                                
             Male
			</td>
			</tr>
			</br>                           
             <tr>
		      <td class="a-center">
             <input type="checkbox" id="check-all" class="flat" name="female" value="<?php echo('female'==1 ? 'checked' : '1');?>" >
			  </td>
	          <td>              											
			  Female
			  </td>						  				
              </tr>           
			</div>
           </div>
      <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Add Cloth Type<span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
       </div>
	   </div>
	   
	   <div class="col-md-12 col-sm-12 col-xs-12 animated fadeInDown">
                  <div class="well profile_view">
                       <div class="col-sm-12">
                           <h4 class="brief"><i></i></h4>
                              
	    <h2 style="margin-left:30%"> SELECT IMAGE TO UPLOAD</h2>
	 <div class="col-md-3 col-sm-3 col-xs-12" style="margin-left:20%">
	 <br>
	 

    <input type="file" name="fileToUpload" id="fileToUpload">
	</br>
	
	<div class="col-md-3 col-sm-3 col-xs-12" style="margin-left:60%">

  
   
	</div>
	</div>
	</div>
	</div>
	
	 <div class="item form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price <span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="price" required="required" type="text">
       </div>
	   </div>
	    <div class="item form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Discount Price<span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="discountprice" required="required" type="text">
       </div>
	   </div>
	    <div class="item form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Quantity <span class="required"></span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="qty" required="required" type="text">
       </div>
	 </div>
	 
	 
	   <br />
	   <div class="ln_solid"></div>
       <div class="form-group">                             
       <div class="col-md-6 col-md-offset-3">
      <input type="submit" class="btn btn-primary" value="Submit" >
	  
	  
	   </div>
       </div>
       </div>
	   </form>
	  <a href="cgrid.php"> <input type="submit"  class="btn btn-success" name="btnedit" value="Edit" style="margin-left:27%"> </a>
	   </div>
       </div>
	    <?php
		 include("footer.php");
		 ?>
       </div>
       </div>
       </div>
       </div>
 

 </body>
 </html>