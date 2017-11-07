<?php include("config.php");?>

<?php
extract($_POST);
$a=$_GET["id"];
$qry=mysql_query("select * from tblnews where nid=".$_GET['id']);
 while($r=mysql_fetch_array($qry))
{
?>



<div class="image view view-first">
<img src="../admin/uploads/news/<?=$r["nimage"]?>" height="300px" width="300px"  style="margin-left:5%">
</div>
</td>
<br /><br /><br /><br />
<td>
<table>

<tr><font size="+2"><b>Title:<?=$r["ntitle"]?></b></font></tr></br>

<tr><font size="+2"><b><?=$r["lcontent"]?></b></font></tr></br>

</tr>
</table>


<?php
}
?>
