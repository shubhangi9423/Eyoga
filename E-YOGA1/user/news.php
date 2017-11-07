<?php include("header.php");?>
<?php include("menu.php");?>
<?php include("config.php");?>
<?php include("fancy.php");?>
<div class="content">
				<!---start-staff---->
				<div class="staff">
					<div class="wrap">
					  <div class="staff-header">
						<h3>our brilliant staff</h3>
					 </div>
					 <?php
					 $qry=mysql_query("select * from tblnews order by nid desc limit 2");
                       while($r=mysql_fetch_array($qry))
{

	extract($r);
	?>

					   <div class="section group group">
							<div class="listview_1_of_2 images_1_of_2">
								<div class="listimg listimg_2_of_1">
									  <img src="../admin/uploads/news/<?=$r["nimage"]?>" height="300" width="400" >
								</div>
							    <div class="text list_2_of_1">
									<h3><span></span><?=$r["ntitle"]?></span> </h3>
									<p><?=$r["scontent"]?> </p>
								 <a  href="dispnews.php?id=<?=$r["nid"]?>"  class="fancybox fancybox.iframe" > <input type="submit" class="button" value="Read More"/></a>
							   </div>
						   </div>			
<?php
}
?>