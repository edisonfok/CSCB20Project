<?php
   $permission = array(2);
   include('session.php');
   session_start();
   $sql = "SELECT * FROM feedback WHERE prof='$username'";
   $result = mysqli_query($db, $sql);
   /*$row = mysqli_fetch_array($result, MYSQLI_BOTH);*/
   $count = mysqli_num_rows($result);
?>

<head>
<title>CSCB20 Winter 2018 Feedback Review</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8" />
</head>

<body>
<div id="wrapper">
   <?php include('header.php'); ?>
   <div id="main-content">
		<div class="box">
			<div class="infocard indigo">
				<h2>
					Anonymous Feedback Review
				</h2>
					Hello Professor <?php echo $lastname; ?>!</br>
					You got <?php echo $count; ?> entries from your students!
			</div>
		</div>
		<div class="Table">
			<div class='TableRow'>
				<div class="TableCell">Email</div>
				<div class="TableCell">Other Conern</div>
				<div class="TableCell">Question 1</div>
				<div class="TableCell">Question 2</div>
				<div class="TableCell">Question 3</div>
				<div class="TableCell">Question 4</div>
			</div>
            <?php while($rows = mysqli_fetch_array($result)): ?>
            <div class='TableRow'>
			    <div class="TableCell"><?php echo $rows["email"];?></div>
				<div class="TableCell"><?php echo $rows["concern"];?></div>
                <div class="TableCell"><?php echo $rows["q1"];?></div>
                <div class="TableCell"><?php echo $rows["q2"];?></div>
                <div class="TableCell"><?php echo $rows["q3"];?></div>
                <div class="TableCell"><?php echo $rows["q4"];?></div>
            </div>
            <?php endwhile; ?>
        </div>
	</div>
</div>
</body>
<?php include('footer.php');?>
