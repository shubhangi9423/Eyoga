<html>
<head>
<?php include("header.php");
include("menu.php");
 include("config.php");
 ?>
</head>
<body>
<div class="content">
			<div class="wrap">
			<!---start-contact---->
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					   <form method="post" action="fupload.php" enctype="multipart/form-data">
					    <div>
						  <span><label>NAME</label></span>
						  <span><input name="userName" type="text" class="textbox" required></span>
						 </div>
							<div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox" required></span>
						    </div>
						    
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>ENTER YOUR COMMENT</label></span>
						    	<span><textarea name="userMsg" required > </textarea></span>
						    </div>
						   
						    <div>
						 <span> <input type="file" name="fileToUpload" id="fileToUpload" ></span>
						  </div>
						   
						   <div>
						   		<span><input type="submit" name="btnsubmit" class="" value="Submit" ></span>
						  </div>
						 
					    </form>
						 
<?php

$qry=mysql_query("select * from tblcontact");
                             while($r=mysql_fetch_assoc($qry))
                              {
                                 extract($r);
	                                ?>
										<h6><a href="#"><?=$r["username"]?> <span>commented</span> <?=$r["comment"]?></a></h6>
										
									</div>
									<?php
										}
										?>			
				    </div>
  				</div>		
  				<div class="clear"> </div>		
			  </div>
			  </div>
			<!---End-contact---->
		</div>

</body>
</html>