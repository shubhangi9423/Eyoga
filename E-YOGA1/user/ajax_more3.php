<style>
.wrapper
{
margin-left:15%;
margin-right:15%;
}
</style>
<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){

//include database configuration file
 include("fancy.php");
include('configi.php');

//get rows query
$query = mysqli_query($con, "SELECT * FROM asana WHERE aid < ".$_POST['id']." ORDER BY aid  DESC LIMIT 3");
?>
<div class="row">
<?php

//number of rows
$rowCount = mysqli_num_rows($query);

if($rowCount > 0){ 
    while($row = mysqli_fetch_assoc($query)){ 
        $id = $row["aid "];
		
?>
<div class="wrapper">
<div class="col-md-4">
        <div class="list_item"><a href="javascript:void(0);">
		<img src="../admin/<?=$row["image"]?>" height="200px" width="200px">
	</div>
		
		 <tr>
   <td>
   
   
	<a class="fancybox fancybox.iframe" href="view.php?id=<?=$row["aid "]?>"><input type="submit" class="btn btn-warning" col-span=2 align="center" value="View More" /></a>


   </td>
   </tr>
        </div>
		</div>
<?php } ?>
    </div>
    <div class="show_more_main" id="show_more_main<?php echo $id; ?>">
        <span id="<?php echo $id; ?>" class="show_more" title="Load more posts">Show more</span>
        <span class="loding" style="display: none;"><span class="loding_txt">Loading…</span></span>
    </div>
<?php 
    } 
}
?>