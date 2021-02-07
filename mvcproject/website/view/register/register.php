<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Dealer/reg.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <title>Sign Up</title>
</head>
<body>
<div class="container">
  <div class="poster">
    <img src="<?php echo URL; ?>public/img/registerimg.jpg">
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
    <form id="registerform" name="registerform" action="registerfrm"  method="POST">
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
        <input class="btn" type="submit" value="Register" name="reg" onclick="checkform()"> 
      <p>Already have an account? Signup <a href='../Login/log'>here</a></p>
    </div>
    </form>
  </div>
</div>
  </div>
  <script language="JavaScript" src="<?php echo URL; ?>public/js/register.js"></script>
</body>
</html>