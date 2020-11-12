<?php require_once('connect.php'); ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/reg.css">
</head>
<?php
    if(isset($_POST['register'])){
        $u_name = $_POST['username'];
        $pass = $_POST['pass'];
        $fname = $_POST['fullname'];
        $add = $_POST['Address'];
        $tp = $_POST['tp'];
        $mail = $_POST['Email'];
        //$type = "d";

        $sql = "INSERT INTO users (`u_name`, `password`) VALUES ('".$u_name."','".$pass."')";  
        $result=mysqli_query($connection,$sql);
        $sql = "INSERT INTO dealers (`u_id`, `f_name`, `address`, `contact`, `email`) VALUES (LAST_INSERT_ID(),'".$fname."','".$add."','".$tp."','".$mail."')";  
        $result=mysqli_query($connection,$sql);
    if($result){
        echo "<script>alert('Successfully Insert!')</script>";
    }
  }
    ?>
<body>
<div class="container">
  <div class="poster">
    <img src="./img/registerimg.jpg">
    <div class="overlay">
    <div class="text">
      <h1>Brandlink Overseas Company</h1>
      <p>Brandlink Overseas company establish in 2003 ,we are importer sold agent and the distributer for world renown Momali faucet ,mixers and other sanitary appliances and Ferroli electrical glass lined water heaters.
      <h1>Our vision</h1>
      <p>Become leading brand faucet market in Sri Lanka.</p>
      <h1>Our Mission</h1>
      <p>To create high quality product for commercial ,household , and provide superior services for our clients.</p>
    </div>
    </div>
  </div>
  <div class="regform">
    <form id="regform" action="" method="POST">
    <div class="formgroup">
        <label for="fullname">Full name</label>
        <input class="form-control" type="text" name="fullname" id="fullname" placeholder="Full Name" required />
        <span class ="error_form" id="fname_error"></span> 
      </div>
    <div class="formgroup">
        <label for="username">Username</label>
        <input class="form-control" type="text" name="username" id="username" placeholder="User Name" required />
        <span class ="error_form" id="uname_error"></span> 
      </div>
    <div class="formgroup">
        <label for="Email">Email</label>
        <input class="form-control" type="text" name="Email" id="Email" placeholder="user@email.com" required />
        <span class ="error_form" id="mail_error"></span> 
    </div>
    <div class="formgroup">
        <label for="Address">Address</label>
        <input class="form-control" type="text" name="Address" id="Address" placeholder="Company address prefered" required />
    </div>
    <div class="formgroup">
        <label for="telephone">Contact Number</label>
        <input class="form-control" type="text" name="tp" id="tp" placeholder="+94(0)XX-XXXXXXX" required />
        <span class ="error_form" id="tp_error"></span> 
    </div>
    <div class="formgroup">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="pass" id="pass" placeholder="Password" required />
        <span class ="error_form" id="pass_error"></span> 
    </div>
    <div class="formgroup">
        <label for="password">RE-Type Password</label>
        <input class="form-control" type="password" name="repass" id="repass" placeholder="Retype Password" required />
        <span class ="error_form" id="repass_error"></span> 
    </div>
    <div class="btnform">
      <input class="btn" name="register" type="submit" value="Register" />
      <p>Already have an account? Signup <a href='login.php'>here</a></p>
    </div>
    </form>
  </div>
</div>
	</div>
</body>
</html>