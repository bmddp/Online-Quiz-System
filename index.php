<!DOCTYPE HTML>
<html lang=>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="content-Type" content="text/html; charset=UTF-8"/>
   <meta name="viewport" content="width=device-width,initial-scale=1"/>
   <title>online quiz system</title>
   <link rel="stylesheet" href="new 1.css">
   <script>
   
  function validateForm()
{
		var a = document.form1.n.value;
		var email = document.form1.e;
		var pass= document.form1.p.value;

		if(a=="")
		{
		alert("Please Enter Your Name");
		document.form1.n.focus();
		return false;
		}
		if(!isNaN(a))
		{
		alert("Please Enter Only Characters");
		document.form1.n.select();
		return false;
		}
		if ((a.length < 5) || (a.length > 15))
		{
		alert("Your Character must be 5 to 15 Character");
		document.form1.n.select();
		return false;
		}


		if (email.value == "")
		{
		window.alert("Please enter a valid e-mail address.");
		email.focus();
		return false;
		}
		if (email.value.indexOf("@", 0) < 0)
		{
		window.alert("Please enter a valid e-mail address.");
		email.focus();
		return false;
		}
		if (email.value.indexOf(".", 0) < 0)
		{
		window.alert("Please enter a valid e-mail address.");
		email.focus();
		return false;
		}


		if(pass=="")
		{
		alert("Please Enter Your Password");
		document.form1.p.focus();
		return false;
		}
		if ((pass.length < 6) || (pass.length > 12))
		{
		alert("Your Password must be 6 to 12 Character");
		document.form1.p.select();
		return false;
		}
}



   
   
   </script>
      
</head>

<body>
   
      <center><h1>login and registration system </h1></center>
	 <div id="login_container">
	       <br>
		    <?php
			 if(isset($_GET['run']) && $_GET['run']=="failed")
			 {
				 echo "<mark>your email or password is not correct</mark>";
			 }		 
            ?>
		   
		   <form name='form' action="signin.php" method="post">
		  
			<center>
			  <h2>login system </h2>
			  <br>
			  
			  Email<input type="email" name="e" placeholder="enter your email"/><br><br>
		      Passw<input type="password" name="p" placeholder="enter your password" /><br><br>
			  <input type="submit" name="submit" value="Submit"/><br><br>
			  </form>
			</center>
			
			
	   </div>
	   

   <div id="register_container">
           <br>
           <br>
		  
		   <form name='form1' action="signup.php" onSubmit="return validateForm()" method="post" enctype="multipart/form-data">
		    <?php if(isset($_GET['run']) && $_GET['run']=="success")
		   {
			   echo "<mark>your registration successfully done</mark>";
		   }
		   ?>
           <center>
			  <h2>Registration system </h2>
			  <br>
			  Name<input type="text" name="n" placeholder="enter your name" /><br><br>
			  Email<input type="email" name="e" placeholder="enter your email" /><br><br>
		      Passw <input type="password" name="p" placeholder="enter your password"/><br><br>
		      upload your image &emsp;&nbsp;<input type="file" name="img"/><br><br>
			  <input type="submit" name="submit" value="Submit"/><br><br>
			 </form>
			  
			</center>
   
   
   </div>
   
  </body>


</html>