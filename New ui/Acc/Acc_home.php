<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SE Collections</title>
    <link rel="stylesheet" href="../css/accHome.css">
    <link rel="stylesheet" href="../css/temp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
  <style>
	 		body {
       			background-color: white;
                background-image: url("../img/homeback.jpg");
	 		}
		</style>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>BrandLink <span>Overseas</span></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src="../img/profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Accountant</h4>
      </div>
       <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="container">
		<div class= "op1">
      <h3>PAYMENT<br />HISTORY</h3>
      <div class="imgcont">
      <a href="ACC_paymentHistoryPage.php"><img src="../img/paymenthistory.png" height="65%" width="80%"></a>
      </div>
		</div>
		<div class= "op2">
      <h3>REPORT<br />GENERATION</h3>
      <div class="imgcont1">
      <a href="Accountant_ReportGeneration.php"><img src="../img/report.jpg" height="85%" width="80%"></a>
      </div>
		</div>
		<div class= "op3">
      <h3>PAYMENT<br />COLLECTED BY SE</h3>
      <div class="imgcont2">
      <a href="ACC_SECollectionsPage.php"><img src="../img/collectedpay.png" height="100%" width="70%"></a>
      </div>
		</div>
	</div>
    </div>
    <div class="footercontent">
        <?php include '../html/footer.html';?>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>