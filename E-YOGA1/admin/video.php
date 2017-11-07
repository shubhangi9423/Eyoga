<html>
<head>
  <?php include("head.php"); ?>
</head>
<body>
<?php include("menu.php"); ?>
<?php include("config.php"); ?>
<div class="" role="main">
<form action="vupload.php" method="post" enctype="multipart/form-data">
 <div class="page-title">
  <div class="title_left">				 
   <h3> Video Gallery  </h3>
  </div>
  <div class="title_right">              
  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">  <div class="input-group">               
  <input type="text" class="form-control" placeholder="Search for...">  
   <span class="input-group-btn">                     
   <button class="btn btn-default" type="button">Go!</button>   </span>                      
  </div>
  </div>
  </div>                     
 </div>
      <div class="clearfix"></div>               
       <div class="row">
        <div class="col-md-12">
         <div class="x_panel">
          <div class="x_title">
            <h2> </h2>                             
             <ul class="nav navbar-right panel_toolbox">                   
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
			     
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>           </ul>
             <div class="clearfix"></div>
          </div>                             
          <div class="col-md-12 col-sm-12 col-xs-12 animated fadeInDown">           <div class="well profile_view">
            <div class="col-sm-12">
             <h4 class="brief"><i></i></h4> 
	 		 <h2 style="margin-left:30%"> SELECT VIDEO TO UPLOAD</h2></br></br>
	          <div class="col-md-3 col-sm-3 col-xs-12" style="margin-left:20%">
			   <input type="file" name="FILE" id="fileToUpload"></br>
		<div class="col-md-3 col-sm-3 col-xs-12" style="margin-left:60%"></br>
       <input type="submit" value="UPLOAD" name="submit" class="btn btn-success">      
		   </div>
	       </div>
	      </div>
	    </div>
	</div>           
									 
                                        		 
                                        
                                            
                                               
 
<div class="x_content">
 <div class="row">
 <?php
include("config.php");
$qry=mysql_query("select * from tblvideo ORDER BY vid DESC limit 4");
	while($r=mysql_fetch_array($qry))
 
{
extract($r);
?>
<video width="300" height="200" controls>
<source src="<?=$r["vname"]?>" type="video/mp4">
</video>
<?php

 }
 
  ?>
    </div>    
	</div>
    </div>
	</div>
    </div>    
   </form>
    <?php
		 include("footer.php");
		 ?>
   </div>
   </div>
  </body>
 </html>             
				                                                                                                                     
                                        
                               
                    
                
				
				

