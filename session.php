<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['firstname'] . " " . $row['lastname'] . "! Username: " . $row['username'];
   
   $username = $row['username'];
   
   $type = $row['type'];
   
   $lastname = $row['lastname'];

   $id = $row['id'];
   
   //important, see the header, which will force to login page if the _SESSION variable is not set. 
   if(!isset($_SESSION['login_user'])){
	  echo "<script>alert('Seems you do not have the premission to enter this page, please try again!');</script>";
      header("location:login.php");
   }
   
   if(!in_array($type, $permission)){
	  echo "<script>alert('Seems you do not have the premission to enter this page, please try again!');</script>";
	  header("location:login.php");
   }
?>