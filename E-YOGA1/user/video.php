<?php include("header.php");?>
<?php include("menu.php");?>
<?php include("config.php");?>
<style>
.videoWrapper {
	position: relative;
	padding-bottom: 26.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper object,
.videoWrapper embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 30%;
	height: 10%;
}
</style>
<form action="upload1.php" method="post" enctype="multipart/form-data">


 
 <?php
	$qry=mysql_query("select * from tblvideo ");
	
      while($r=mysql_fetch_array($qry))
        {
      ?>       
	                   <div class="videoWrapper">
             <video controls >
                 <source src="../admin/<?=$r["vname"]?>  " type="video/mp4"> 
				 </br>
              </video>
			   </div>     
			
  <?php
        }
    ?> 
	                                      
 
 
</form>