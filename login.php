<?php
   include("config.php");
   session_start();
   $error = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("Location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   <head>
		<link href="style.css" rel="stylesheet" type="text/css">
		<title>CSCB20 Login Page</title> 
   </head>
   
	<body bgcolor = "#FFFFFF">
   	<div id="main-content">
		<div class="wallpaper colorover">
			<img style="width: 100%; height:100%;" src="background.png" alt="" />
			<div class="display-middle">
				Introduction to Databases and Web Applications
				<div class="logincard"">
				<b>Login</b>
				<hr>
				<form action = "" method = "post">
                  <label>User Name  :</label><input type = "text" name = "username" class = "box"/><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/>
                  <input type = "submit" value = " Submit "/><br />
				 </form>
				<div style = "font-size:11px; margin-top:10px"><a href="create.php">Don't have an account? Click here to create one!</a></div>
				<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>	
				</div>
         </div>
			</div>
		</div>			
	</div>
   </body>
</html>
<?php include('footer.php'); ?>