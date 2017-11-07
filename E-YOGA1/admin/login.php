 <html>
  <head>
   <?php include("loglink.php"); 
   error_reporting(null);?>
   <style type="text/css">
			body { background:#FAFAFA !important; }
		</style>
  </head>
   <title>
    Login
  </title>
<body style="background:#F7F7F7;">
<?php include("config.php"); ?>
<?php 
     if(isset($_POST['btn']))
	 {
		$name=$_POST['email'];
		$password=$_POST['pass'];
		$qry=mysql_query("select * from tbllogin where email='$name' and pass='$password'");
		 extract($_POST);
	
		if(mysql_num_rows($qry))
	
		  { 
		    header("Location:index.php");
		  }
		  else
		  {
		    header("Location:login.php");
		  }
		
     }
		?>



    
<div class="">
  <div id="wrapper">
     <div id="login" class="animate form">
         <section class="login_content">
            <form method="post" action="">
              <h1>Login Form</h1>
               <div>
                <input type="email" name="email" class="form-control" placeholder=" Email-id" required="required " />
               </div>
               <div>
                 <input type="password" name="pass" class="form-control" placeholder="Password" required="required" />
               </div>
               <div class="button-login">	
			     <input type="submit" class="btn btn-primary" value="Login" name="btn">
               </div>
           </form>
                <!-- form -->
          </section>
                <!-- content -->
       
       </div>
     </div>
    </div>
  </body>
</html>