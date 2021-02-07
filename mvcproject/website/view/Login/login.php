<html>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/log.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script language="JavaScript" src="<?php echo URL; ?>public/js/login.js"></script>
  <title>Sign in</title>
</head>

<body>
	<style>
		body {
  		background-image: url("<?php echo URL; ?>public/img/loginback.jpg");
  		background-size: cover;
  		background-position: top center;
  		}
	</style>
<div class="dealerSign"><a href='../register/register' class="signup">Sign up as a dealer</a></div>
<div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" name="logform" action="check"  method="POST" onsubmit="">
      <input class="un " name="username" type="text" align="center" placeholder="Username" required>
      <input class="pass" name="password" type="password" align="center" placeholder="Password" required>
      <button class="sub" type="submit" name= "login" align="center">Sign in</button>
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
    </form>        
                
</div>
</body>

</html>