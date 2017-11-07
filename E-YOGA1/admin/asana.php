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
	 <form method="post"class="form-horizontal form-label-left" enctype="multipart/form-data">
      <div class="item form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Add/Select Asana Name <span class="required">*</span>
       </label>
       <div class="col-md-3 col-sm-3 col-xs-6">
       <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
       </div>
	   
       </div>                                    
       <div class="item form-group">
       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Select Gender <span class="required">*</span>
        </label>                                       
        <div class="col-md-6 col-sm-6 col-xs-12">
         <tr>
		  <td class="a-center ">                       
           <input type="checkbox" id="check-all" class="flat" name="Male" value="<?php echo('Male'==1 ? 'checked' : '1');?>" >
           </td>
			<td>                                
             Male
			</td>
			</tr>
			</br>                           
             <tr>
		      <td class="a-center">
                 <input type="checkbox" id="check-all" class="flat" name="Female"value="<?php echo('Female'==1 ? 'checked' : '1');?>" >
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
           <input type="checkbox" id="check-all" class="flat" name="Morning" value="<?php echo('morning'==1 ? 'checked' : '1');?>" >
			</td>
		    <td>
			Morning
			</td>
			</tr>
			</br>			
			<tr>
			<td class="a-center">
             <input type="checkbox" id="check-all" class="flat" name="Evening" value="<?php echo('evening'==1 ? 'checked' : '1');?>" >
			</td>
	         <td>
			 Evening
			 </td>
			</tr>
			</div>
            </div>
		    <div class="item form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Select Disease <span class="required">*</span>
              </label>
             <div class="col-md-6 col-sm-6 col-xs-12">
			<?php
		  $qry=mysql_query("select * from tbldisease ");
		  ?>
            <select class="form-control" name="d1">
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
          <div class="col-md-6 col-sm-6 col-xs-12">
		  <?php
		  $qry=mysql_query("select * from tblimage ");
		  ?>
            <select class="form-control" name="m1">
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
            <div class="col-md-6 col-sm-6 col-xs-12">
			<?php
		  $qry=mysql_query("select * from tblvideo ");
		  ?>
            <select class="form-control" name="p1">
			<?php
			
			while($r1=mysql_fetch_array($qry))
            {
              extract($r1);
   
             ?>
             <option value="<?=$r1['vname']?>"><?=$r1["vname"]?></option>
             
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
		 
         <textarea class="ckeditor" name="editor" ></textarea>         </div> 
		</div>
       <div class="ln_solid"></div>
       <div class="form-group">                             
       <div class="col-md-6 col-md-offset-3">
  <input type="submit" class="btn btn-primary" name="btnsubmit" value="Submit">
    
       </div>
       </div>
	   </form>
	    <a href="grid.php">  <input type="submit" class="btn btn-success" name="btncancel" value="Edit" style="margin-left:27%"> </a>
	   </div>
	   <?php
	   include("footer.php");
	   ?>
       </div>
       </div>
       </div>
       </div>
       </div>
 			<?php			
 if(isset($_POST['btnsubmit']))
{
extract($_POST);


$r=mysql_query("insert into asana(aname,male,female,morning,evening,disease,image,video,content) values('$name','$Male','$Female','$Morning','$Evening','$d1','$m1','$p1','$editor')");
}
?>
 </body
></html>