<html>
<head>
<?php
 include("head.php");
 include("fancy_head.php");
 ?>
</head>
<body>
<?php
 include("menu.php");
?>
   
                                    
                                        
 <div class="x_content">                                          
<form method="post">
<table class="table table-striped responsive-utilities jambo_table">
<thead>
<tr class="headings">
<th>Id</th>
<th>Asana Name</th>
<th>Male</th>
<th>Female</th>
<th>Morning</th>
<th>Evening</th>
<th>Disease</th>
<th>Image</th>
<th>Video</th>
<th>Content</th>
<th>Select</th>

</tr>

 

  
 <?PHP
    include("config.php");
	
    
    $sql = mysql_query("SELECT * FROM asana Order by aid DESC ");
    
   
    while($row=mysql_fetch_array($sql))
    {
    ?>
        <tr > 
          <td><?php echo $row['aid']; ?></td>
          <td><?php echo $row['aname']; ?></td>
          <td><?php echo $row['male']; ?></td>
		  <td><?php echo $row['female']; ?></td>
          <td><?php echo $row['morning']; ?></td>
		  <td><?php echo $row['evening']; ?></td>
          <td><?php echo $row['disease']; ?></td>
          <td>
	      <img src=uploads/images/<?php echo $row['image'];?> height="100px" width="100px"/>
	      </td>
          <td><?php echo $row['video']; ?></td>
		  <td><?php echo $row['content']; ?></td>
		  <td><a href="aedit.php?id=<?=$row['aid']?>" class="fancybox fancybox.iframe" style="size:50%"><input type="button" value="Select" class="btn btn-success"></a>  
		    
		  <?php
		  }
		  ?>
 </thead>
</table>
</form>
</body>
</html>