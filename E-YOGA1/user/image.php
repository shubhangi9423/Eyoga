 <?php include("header.php");?>
<?php include("menu.php");?>
<?php include("config.php");?>
 <div id="gallery" class="grid">
 <?php
	$qry=mysql_query("select * from tblimage order by iid desc limit 10");
      while($r=mysql_fetch_array($qry))
        {
      ?>                                 
              <figure class="effect-bubba">
                  <img src="../admin/uploads/images/<?=$r["iname"]?>" height="500px" width="700px" >
				   <figcaption>
                <h2><?=$r["iname"]?> <span></span></h2>
                <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                <a href="#">View more</a>            </figcaption>           
      
              </figure>
			   
  <?php
        }
    ?>                                           
   
                </div>