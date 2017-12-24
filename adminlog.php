<!DOCTYPE html>
<?php
  session_start();
  $con=mysqli_connect("localhost","root","","online_quiz");
  


?>
<html>
   <head>
        <title>Admin login</title>
    </head>
	<style>
	#Admin_login_container 
{
	width:35%;
	height:auto;
	margin:7% 30%;
	float:left;
	/*background:red;*/
	box-shadow: 0 0 10px #1D771B;
} 

h2 
{
	background:	#0B671A;
	padding:10px;
	color:white;
}
	
	
	
	</style>
	<body>
	
	<div id="Admin_login_container">
	<form action="admin.php" method="post">
	       
		      <h2>Admin login</h2><center><img src="user@2x.png" width="60"></center>
			  <center>
			  <h2>Admin</h2>
			  <br>
			  
			  Email<input type="email" name="admin_email" placeholder="enter your email"/><br><br>
		      Passw<input type="password" name="admin_pass" placeholder="enter your password" /><br><br>
			  <input type="submit" name="submit" value="Submit"/><br><br>
		</form>
			</center>
	  </form>
	  </div>
	  
	  
	  
	  <?php
	     if(isset($_POST['admin_login'])) {
			 //getting the text information and saving in local variable

			 $admin_pass=mysqli_real_escape_string($con,$_POST['admin_pass']);
			 $admin_email=mysqli_real_escape_string($con,$_POST['admin_email']);
			
			 
          $sel="select * from  admin where admin_email='$admin_email' AND admin_pass='$admin_pass'";
		 
		 $run=mysqli_query($con,$sel);
		 
		 $check =mysqli_num_rows($run);
		 
		 if($check==0)
		 {
			 echo "<script>alert('Password or Email is not correct,try again')</script>";
			 exit();
		 }
		 else
		 {
			 $_SESSION['admin_email']=$admin_email;
			 
			 echo "<script>window.open('admin.php','_self')</script>";
		 }
		 }
	  
	  ?>
	
	
	
	</body>


</html>