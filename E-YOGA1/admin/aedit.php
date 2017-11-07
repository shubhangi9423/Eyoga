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
<?php
     $eid = $_GET['id']; 
	 $result = mysql_query("select * from asana where aid =".$_GET['id']); 
     while($row = mysql_fetch_array($result))
     {
       extract($row);
?>	
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

    <div  role="main">
      <div class="">
         <div class="page-title">
               <div class="title_left">
                 <h3>
                    Asana
                 </h3>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-6col-sm-6 col-xs-12 animated fadeInDown">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
         <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                
								
								
	<div class="x_content">
	 <form method="post"class="form-horizontal form-label-left" novalidate>
      <div class="item form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Add/Select Asana Name <span class="required">*</span>
       </label>
       <div class="col-md-6 col-sm-6 col-xs-12">
       <input id="name" value="<?=$row["aname"]?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
       </div>
	  
       </div>                                    
       <div class="item form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Select Gender <span class="required">*</span>
        </label>                                       
        <div class="col-md-6 col-sm-6 col-xs-12">
         <tr>
		  <td class="a-center ">                       
       <input type="checkbox" id="check-all" class="flat" name="Male" value="yes" <?php echo ($row['male']==1 ? 'checked' : '');?> >
           </td>
			<td>                                
             Male
			</td>
			</tr>
			</br>                           
             <tr>
		      <td class="a-center">
                 <input type="checkbox" id="check-all" class="flat" name="Female" value="yes" <?php echo ($row['female']==1 ? 'checked' : '');?>>
			  </td>
	          <td>              											
			  Female
			  </td>						  				
              </tr>           
			</div>
           </div>
           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Select Climate <span class="required">*</span>
             </label>
           <div class="col-md-6 col-sm-6 col-xs-12">
            <tr>
			<td class="a-center ">
             <input type="checkbox" id="check-all" class="flat" name="Morning" value="yes" <?php echo ($row['morning']==1 ? 'checked' : '');?> >
			</td>
		    <td>
			Morning
			</td>
			</tr>
			</br>			
			<tr>
			<td class="a-center">
             <input type="checkbox" id="check-all" class="flat" name="Evening" value="yes" <?php echo ($row['evening']==1 ? 'checked' : '');?> >
			</td>
	         <td>
			 Evening
			 </td>
			</tr>
			</div>
            </div>
			 <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Choose Image To Upload <span class="required">*</span>
            </label>
			<div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" disabled="disabled" value="<?=$row["disease"]?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="m1" required="required" type="text">
       </div>
	   
          <div class="col-md-3 col-sm-3 col-xs-6">
		  <?php
		  $qry=mysql_query("select * from tbldisease ");
		  ?>
            <select class="form-control" name="m1">
			<option >--Select--</option>
			<?php
			
			while($r1=mysql_fetch_array($qry))
            {
              extract($r1);
   
             ?>
             <option value="<?=$r1['dname']?>"><?=$r1["dname"]?></option>
             
			 <?php
			 }
			 ?> 
			 </select>                               
            </div>
			</div>
		   
	  
		 <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Choose Image To Upload <span class="required">*</span>
            </label>
			<div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" disabled="disabled" value="<?=$row["image"]?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="m1" required="required" type="text">
       </div>
	   
          <div class="col-md-3 col-sm-3 col-xs-6">
		  <?php
		  $qry=mysql_query("select * from tblimage ");
		  ?>
            <select class="form-control" name="m1">
			<option >--Select--</option>
			<?php
			
			while($r1=mysql_fetch_array($qry))
            {
              extract($r1);
   
             ?>
             <option value="<?=$r1['iname']?>"><?=$r1["iname"]?></option>
             
			 <?php
			 }
			 ?> 
			 </select>                               
            </div>
			</div>
		   
	    <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Choose Video To Upload <span class="required">*</span>
            </label>
			<div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" disabled="disabled" value="<?=$row["video"]?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="m1" required="required" type="text">
       </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
			<?php
		  $qry=mysql_query("select * from tblvideo ");
		  ?>
             <select class="form-control" name="d2">
			 <option >--Select--</option>
			 <?php
			
			while($r2=mysql_fetch_array($qry))
            {
              extract($r2);
   
             ?>
              <option value="<?=$r2['vname']?>"><?=$r2["vname"]?></option>
            
			 <?php
			 }
			 ?>
			  </select>                                   
           </div>
         </div>
         <div class="item form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Enter Content <span class="required">*</span>
         </label>
         <div class="col-md-6 col-sm-6 col-xs-12">
	     
         <textarea class="ckeditor" name="editor" rows="5" value="<?=$row['content']?>" ><?=$row['content']?></textarea>         </div> 
		</div>
       <div class="ln_solid"></div>
       <div class="form-group">                             
       <div class="col-md-6 col-md-offset-3">
 <input type="submit" class="btn btn-success" name="btnupdate" value="Update"></button>
 <input type="submit" class="btn btn-danger" name="btndelete" value="Delete" ></button>
       </div>
        </div>
	   </form>
	   </div>
       </div>
       </div>
	    <?php
		 include("footer.php");
		 ?>
       </div>
       </div>
       </div>
 			
		<?php
		}
		?>
   <?php
 			
 if(isset($_POST['btnupdate']))
{
extract($_POST);

$result="UPDATE asana
          SET aname='$name',
		      male='$Male',
			  female='$Female',
			  morning='$Morning',
			  evening='$Evening',
              content='$editor'
			  WHERE 

          aid=".$_GET['id'];
mysql_query($result);




}
?>
<?php
 			
 if(isset($_POST['btndelete']))
{
extract($_POST);
$result="delete from  asana  where aid=".$_GET["id"];
mysql_query($result);
}
?>

 
	

		
</body>
</html>
			
			
			
			
			
			
			