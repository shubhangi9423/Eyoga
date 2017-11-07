<?php include("config.php"); ?>


<?php
extract($_POST);

$qry=mysql_query("select * from tblimage where iid=".$_GET['id']);
 while($r=mysql_fetch_array($qry))
{
?>
 <div class="image view view-first">
 <img src="uploads/images/<?=$r["iname"]?>" height="570px" width="700px"  style="margin-left:5%"></>
 </div>
<?php
}
?>