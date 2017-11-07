<html>
<head>
<?php
error_reporting(null);
include("loglink.php"); 
include("config.php");
?>
<style type="text/css">
			body { background:#FAFAFA !important; }
		</style>

</head>
<title>
    Login
  </title>
<body style="background:#F7F7F7;">

<?php
if(isset($_POST['btnsave']))
{
extract($_POST);
$q="select * from tbllogin where aemail='$txtname' and apass='$txtpass'";
echo $q;
$qry=mysql_query($q);
if(mysql_num_rows($qry)==1)
{

header("location:index1.php");
}
 else
{
 header("Location:index.php");
 }
		

}
?>
<div class="">
  <div id="wrapper">
     <div id="login" class="animate form">
         <section class="login_content">
<form method="post">
<h1>Login Form</h1>
<div>
                <input type="email" name="txtname" class="form-control" placeholder=" Email-id" required="required " />
               </div>
<div>
                 <input type="password" name="txtpass" class="form-control" placeholder="Password" required="required" />
               </div>
 <div class="button-login">
<input type="submit" name="btnsave" class="btn btn-primary" value="Login"  />
</div>
</form>

</section>
</div>
     </div>
    </div>
</body>
</html>