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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<div class="">
<div class="page-title">
     <div class="title_left"><h3>NEWS</h3></div>
</div>
 <div class="x_panel">
<div class="clearfix"></div>

                   
              
                       <form action="nupload.php" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" >
						<div class="col-md-5 col-sm-5 col-xs-8">
                            <div class="x_panel">
                                <div class="x_title">
                              <h2>News Title</h2>
                             <ul class="nav navbar-right panel_toolbox">
                             <li>
					           <a class="collapse-link">
					            <i class="fa fa-chevron-up"></i>
							   </a>
                              </li>
                              <li>
								<a class="close-link">
								 <i class="fa fa-close"></i>
								 </a>
                               </li>
                               </ul>
                             <div class="clearfix"></div>
                           </div>
                           <div class="x_content">
						    <div class="col-md-12 col-sm-12 col-xs-12">
         <textarea class="form-control" rows="4" name="text" placeholder="Enter the Title">
		 </textarea>
                            </div>
					       </div>
						 </div>
                       </div>
       


                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Images </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li>
										<a class="collapse-link">
										<i class="fa fa-chevron-up"></i>
										</a>
                                        </li>
                                        <li>
										<a class="close-link">
										<i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                   <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
	<div class="col-md-12 col-sm-12 col-xs-12 animated fadeInDown">
      <div class="well profile_view">
       <div class="col-sm-12">
        <h4 class="brief"><i></i></h4>
        <h2 style="margin-left:30%"> SELECT IMAGE TO UPLOAD</h2>
    <div class="col-md-3 col-sm-3 col-xs-12" style="margin-left:20%">
     <input type="file" name="fileToUpload" id="fileToUpload" ><br />
    
   </div>
  </div>
  </div>
 </div>
                                </div>

                     </div>
                </div>
				</div>
               <div class="clearfix"></div>

                        
						
						
						<div class="col-md-10 col-sm-10 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Content</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li>
										<a class="collapse-link">
										<i class="fa fa-chevron-up"></i>
										</a>
                                        </li>
                                        <li>
										<a class="close-link">
										<i class="fa fa-close"></i>
										</a>
                                        </li>
                                    </ul>
                                 <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <div class="col-md-12 col-sm-12 col-xs-12">
		                       <textarea class="ckeditor" name="editor" >
						       </textarea>         
							   </div> 
		                      </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
							
							
							
							
							<div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_content" align="center">
                <input type="submit" class="btn btn-primary" value="Submit" >

                                </div>
                            </div>
						</div>
   
							
							
	<!--end of x_panel-->
   
   </form>
  </div>
   
                        
						
</div>						
						
						

</body>
</html>