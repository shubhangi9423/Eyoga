<html>
<head>
<?php
error_reporting(null);
include("config.php");
 include("loglink.php");
 session_start();
?>
</head>
<body>
<?php
if(isset($_POST['btnsave']))
{
extract($_POST);
$q="select * from tblregi where uemail='$txtname' and upass='$txtpass'";

$qry=mysql_query($q);
if(mysql_num_rows($qry)==1)
{
echo "OK";
$_SESSION["uemail"]=$txtname;
}

}
?>
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
<form method="post" >
<div class="form-group">
<input type="email" name="txtname"  class="form-control input-lg" placeholder="Email" required/>
</div>
<div class="form-group">
<input type="password" name="txtpass"class="form-control input-lg" placeholder="Password" required/>
</div>
 <div class="form-group">
<input type="submit" name="btnsave" class="btn btn-primary btn-lg btn-block" value="Sign In"/>
<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Forgot Password?</a></span>
</div>
</form>
</div>
<div class="modal-footer">
          <div class="col-md-12">
          <a href="index.php"><input type="submit" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" value="Cancel"></a>
		  </div>	
      </div>
  </div>
  </div>
</div>
</body>
</html>