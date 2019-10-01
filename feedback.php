<?php
   $permission = array(0);
   include('session.php');
   session_start();
   $error = "Press sumbit to get your feedback send straight to your Prof";
   $prof = "SELECT * FROM user WHERE type=2";
   $profresult = mysqli_query($db, $prof);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myemail = mysqli_real_escape_string($db,$_POST["email"]);
	  $myprof = mysqli_real_escape_string($db,$_POST["prof"]); 
      $myconcern = mysqli_real_escape_string($db, $_POST["concern"]); 
	  $myq1 = mysqli_real_escape_string($db, $_POST["q1"]); 
      $myq2 = mysqli_real_escape_string($db, $_POST["q2"]); 
      $myq3 = mysqli_real_escape_string($db, $_POST["q3"]); 
      $myq4 = mysqli_real_escape_string($db, $_POST["q4"]); 

      $insert = "INSERT INTO feedback (prof, email, concern, q1, q2, q3, q4) VALUES ('$myprof', '$myemail', '$myconcern', '$myq1', '$myq2', '$myq3', '$myq4')";
      $result = mysqli_query($db, $insert);
	  //$row = mysqli_fetch_array($profresult,MYSQLI_ASSOC);

	  if($result){
		  echo '<script>function myFunction(){alert("I am an alert box!"); // this is the message in ""}</script>';
		$error = "Records inserted successfully.";
		} else{
		$error = "ERROR: Could not able to execute $sql. " . mysqli_error($db); //Problem!!!
		}
   }
?>
<head>
<title>CSCB20 Winter 2018 Feedback Tool</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8" />
</head>
<body>
<div id="wrapper">
	<?php include('header.php'); ?>

	<div id="main-content">
		<form method="post" action="">
		<div class="box">
			<div class="infocard indigo">
				<h2>
					Anonymous Feedback Tool
				</h2>
					Your Professer:
					  <select name="prof">
					  <?php while($rows = mysqli_fetch_array($profresult, MYSQLI_BOTH)){					  
							echo "<option value=" . $rows["username"]. ">" . $rows["firstname"]. " " . $rows["lastname"]. "</option><br>";
					  }
					  ?>
					  </select>
					</br>
					Email (Optional):
					<input name="email" type="text" value="Optional" />
					</br>
					Any concern? (Optional):
					</br>
					<textarea cols="50" name="concern" rows="4"></textarea>
					<br />
					<input type = "submit" value = " Submit "/>
					</br>
					<?php echo $error; ?>
			</div>
		</div>
		<ul class="flexlist">
			<li class="flexlist-item">
				<div class="card">
					<p>What do you like about the instructor teaching? (Required)</p>
					<textarea cols="50" name="q1" rows="4" required></textarea>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
				<p>What do you recommend the instructor to do to improve their teaching?  (Required)</p>
					<textarea cols="50" name="q2" rows="4" required></textarea>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
				<p>What do you like about the labs? (Required)</p>
					<textarea cols="50" name="q3" rows="4" required></textarea>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
				<p>What do you recommend the lab instructors to do to improve their lab teaching? (Required)</p>
					<textarea cols="50" name="q4" rows="4" required></textarea>
				</div>
			</li>
		</ul>
		</form>
	</div>

</div>
</body>
	<footer>
	<div>
		Design by Manqiao Wang &amp; Edison Chun Ho Fok
	</div>
	<p>
		<a href="http://www.utsc.utoronto.ca/cms/computer-science-1">
			 Department of Computer and Mathematical Sciences at UTSC
		</a>
	</p>
	</footer>
