<?php

include ('connect.php');
session_start();

if (isset($_POST['login'])) {
	
  $username= $_POST['username'];
  $password= $_POST['password'];
  echo $password;
  
	$query = "SELECT * FROM `users` WHERE `u_name` = '".$username."' AND `password` = '".$password."'";
	

	$result = $connection->query($query);
	$data = $result->fetch_assoc();

 	if ($result->num_rows > 0 && $data['u_type']=="dealer") {
		 $_SESSION['loggedin'] = 1;
		 header("location:Dealer/Dealer_home.php");
	}
    if ($result->num_rows > 0 && $data['u_type']=="admin") {
		$_SESSION['loggedin'] = 2;
		header("location:Admin/Admin_home.php");
  }
  if ($result->num_rows > 0 && $data['u_type']=="accountant") {
		$_SESSION['loggedin'] = 3;
		header("location:Acc/Acc_home.php");
  }
  if ($result->num_rows > 0 && $data['u_type']=="op_manager") {
		$_SESSION['loggedin'] = 4;
		header("location:OM/OM_home.php");
  }
  if ($result->num_rows > 0 && $data['u_type']=="sales_executive") {
		$_SESSION['loggedin'] = 5;
		header("location:SE/SE_home.php");
	}
  if ($result->num_rows > 0 && $data['u_type']=="hom") {
		$_SESSION['loggedin'] = 6;
		header("location:HOM/HOM_home.php");
  }		
  if ($result->num_rows > 0 && $data['u_type']=="sales_co") {
		$_SESSION['loggedin'] = 7;
		header("location:SE/SC_home.php");
	}
	//else{
		//echo '<script>alert("Good job!", "You clicked the button!", "success");</script>';
	//}
				
	}
 
?>

<html>

<head>
  <link rel="stylesheet" href="css/log.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/temp.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Sign in</title>
</head>

<body>
	<style>
		body {
  		background-image: url("img/loginback.jpg");
  		background-size: cover;
  		background-position: top center;
  		}
	</style>
	 <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>BrandLink <span>Overseas</span></h3>
      </div>
      <div class="right_area">
        <a href="register.php" class="logout_btn">Sign Up as a Dealer</a>
      </div>
    </header>
<div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" id="logform" action="" method="POST">
      <input class="un " name="username" type="text" align="center" placeholder="Username">
      <input class="pass" name="password" type="password" align="center" placeholder="Password">
      <button class="sub" type="submit" name= "login" align="center">Sign in</button>
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
    </form>        
                
</div>

</body>

</html>