<?php include("header.php");?>
<?php include("menu.php");?>
<?php include("config.php");?>

<div class="row" style="background-color:#99CCFF">

    
<?php
$qry=mysql_query("select * from tbldrink limit 8");
while($r=mysql_fetch_array($qry))
{
	extract($r);
	?>
    <div class="col-md-3">
<div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Cloths</h3>
            </div>
            <div class="panel-body">
              <table class="table " align="center">
    <tr>
    <td>
   <img src="../Shubhangi/<?=$r["image"]?>" height="100px" width="100px" />
    </td>
    </tr>
    <tr>
    <Td>
<?=$r["drinks"]?>
    </Td>
    </tr>
    <tr>
    <td>
    <?=$r["price"]?>
    </td>
    </tr>
	<tr>
    <td>
    <?=$r["discountprice"]?>
    </td>
    </tr>
	<tr>
    <td>
    <?=$r["quantity"]?>
    </td>
    </tr>
    
    
    <tr>
      <td>
 <input type="submit" class="btn btn-success" value="Select" />
    </td>
    </tr>
    </table>
   </div>
          </div>
          </div>
    <?php
	
}
?>

