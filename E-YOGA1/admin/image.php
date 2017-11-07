<html>
<head>
  <?php include("head.php"); ?>
  <?php include("fancy_head.php"); ?>
  
</head>
<body>
<?php include("menu.php"); ?>
<?php include("config.php"); ?>
<div class="" role="main">
<form action="iupload.php" method="post" enctype="multipart/form-data">
 <div class="page-title">
  <div class="title_left">
   <h3> Image Gallery  </h3>
  </div>
  <div class="title_right">
   <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
    <div class="input-group">
     <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
       <button class="btn btn-default" type="button">Go!</button>
     </span>
    </div>
   </div>
  </div>
 </div>
 <div class="clearfix"></div>
 <!-- panel of media gallary -->
 <div class="row">
  <div class="col-md-12">
   <div class="x_panel">
    <div class="x_title">
     <h2> </h2>                               
	  <ul class="nav navbar-right panel_toolbox">
	   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
       
	   <li><a class="close-link"><i class="fa fa-close"></i></a></li>
      </ul>
	  <div class="clearfix"></div>
     </div>
	 <div class="col-md-12 col-sm-12 col-xs-12 animated fadeInDown">
      <div class="well profile_view">
       <div class="col-sm-12">
        <h4 class="brief"><i></i></h4>
        <h2 style="margin-left:30%"> SELECT IMAGE TO UPLOAD</h2>
    <div class="col-md-3 col-sm-3 col-xs-12" style="margin-left:20%"></br></br>
     <input type="file" name="fileToUpload" id="fileToUpload" ></br>
    <div class="col-md-3 col-sm-3 col-xs-12" style="margin-left:60%"> </br>
   <input type="submit" value="UPLOAD" name="submit" class="btn btn-success"  >
	</div>
   </div>
  </div>
  </div>
 </div>

  <div class="x_content">                              
   <div class="row">
  <?php
	$qry=mysql_query("select * from tblimage order by iid desc limit 10 ");
	while($r=mysql_fetch_array($qry))
    {
  ?>                                 
    <div class="col-md-55">
     <div class="thumbnail">                                 
        <div class="image view view-first">
          <img src=  "uploads/images/<?=$r["iname"]?>" height="140px" width="200px" >               <div class="mask">
               <div class="tools tools-bottom"> 
			   <td>             
			   <a href="dispimg.php?id=<?=$r['iid']?>" class="fancybox fancybox.iframe" style="size:50%">
			  <input type="submit" class="btn btn-success" value="View"  />
			   </td>  
             </div> 
			                       
             </div>                                               
            </div>                                 
                  <p align="center"><?=$r["iname"]?></p>                               
            </div>
			
          </div>
		  
         <?php
          }
         ?>
		  <?php
		 include("footer.php");
		 ?>                                           
         </div>
		                                                  
        </div>
       </div>                                                  
      </div>
     </div                                                 
    ></div>
   </div>
   </form>
  </div>
 </div>                                               
 </body>
</html>
				                                               
                                            
                                       
	 
    
                                                   
                                                
                                                
                                            
                                       
                                
                        
                   
				
