<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collected Payments</title>
    <link rel="stylesheet" type="text/css" href="../css/div3.css">
    <link rel="stylesheet" type="text/css" href="../css/form2.css">
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
        <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fa fa-address-book" ></i><span>Dealer Info</span></a>
        <a href="#"><i class="fa fa-info-circle"></i><span>Not Eligible List</span></a>
        <a href="#"><i class="fa fa-shopping-cart"></i><span>New Orders</span></a>
        <a href="#"><i class="fa fa-money-bill"></i><span>Collected Payments</span></a>
        <a href="#"><i class="fa fa-exclamation-circle"></i><span>Complaints to Check</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src="../img/profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Sales Executive</h4>
      </div>
        <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fa fa-address-book" ></i><span>Dealer Info</span></a>
        <a href="#"><i class="fa fa-info-circle"></i><span>Not Eligible List</span></a>
        <a href="#"><i class="fa fa-shopping-cart"></i><span>New Orders</span></a>
        <a href="#"><i class="fa fa-money-bill"></i><span>Collected Payments</span></a>
        <a href="#"><i class="fa fa-exclamation-circle"></i><span>Complaints to Check</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="wrapper clearfix">
      <div class ="topic">
				<h1>Collected Payments</h1>
			</div>
		</div>
        
        <div class="wrapper clearfix">
		<div class="form">
            <form>
                <div class="row">
                    <div class="col-25">
                    <label for="invoice">Invoice No</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="invoice" name="InoiceNo" required>
                    <input type="button" value="Find">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="id">Dealer id</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="id" name="deaerId" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="amount">Amount</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="amount" name="amount" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="name">Dealer Name</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="name" name="name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="date">Date</label>
                    </div>
                    <div class="col-75">
                    <input type="date" id="date" name="date" required>
                    <input type="checkbox" id="copy" name="copy" value="Copy">
                    <label for="copy"> Send a copy to HOM</label>
                    </div>
                </div>
                <div class="row">
                <div class="lastbtn">
                    <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
        </div>
    <div class="footercontent">
        <?php include '../html/footer.html';?>
    </div>
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