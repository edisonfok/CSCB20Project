<?php
   include("config.php");
   session_start();
    $error = "Everything is ok";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	  $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
      $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
	  $id = mysqli_real_escape_string($db,$_POST['id']);
	  $type = mysqli_real_escape_string($db,$_POST['type']);
      
      $sql = "INSERT INTO user (username, firstname, lastname, password, id, type) VALUES ('$myusername', '$firstname', '$lastname', '$mypassword', '$id', $type)";
	  $sql2 = "INSERT INTO mark (stuid, a1, a2, a3) VALUES ('$id', 0, 0, 0)";
      $result = mysqli_query($db,$sql);
	  
	  if($result){
		  echo '<script>function myFunction(){alert("I am an alert box!"); // this is the message in ""}</script>';
		  $result2 = mysqli_query($db,$sql2);
		  $error = "Records inserted successfully.";
		  header("location:login.php");
		} else{
			$error = "ERROR: Could not able to execute $sql. " . mysqli_error($db); //Problem!!!
		}
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	  /*
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("Location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
	  */
   }
?>
<html>
   
   <head>
   <link href="style.css" rel="stylesheet" type="text/css">
   <title>Create Account</title>
   
   </head>
   <body bgcolor = "#FFFFFF">
   <div id="main-content">
		<div class="wallpaper colorover">
			<img style="width: 100%; height:100%;" src="background.png" alt="" />
			<div class="display-middle">
				<div class="logincard"">
				<b>Create Account</b>
				<hr>
				<form action = "" method = "POST">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box" required><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" required><br/>
				  <label>ID  :</label><input type = "text" name = "id" class = "box" required><br />
                  <label>First Name  :</label><input type = "text" name = "firstname" class = "box" required><br/>
				  <label>Last Name  :</label><input type = "text" name = "lastname" class = "box" required><br/>
				  <fieldset>
					<input type="radio" name="type" value="0" checked><small>Student</small><br />
					<input type="radio" name="type" value="1"><small>Teaching Assistant</small><br />
					<input type="radio" name="type" value="2"><small>Professor</small>
				  </fieldset>
                  <input type = "submit" value = " Submit "/><br />
               </form>
         </div>
			</div>
	</div>
   </body>
</html>
<?php include('footer.php'); ?>