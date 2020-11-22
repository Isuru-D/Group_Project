<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Details</title>
    <link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
    <link rel="stylesheet" type="text/css" href="../css/HOMNewOrdersPage.css">
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
        <a href="#"><i class="fa fa-history"></i><span>Late Payment Details</span></a>
        <a href="#"><i class="fa fa-book"></i><span>Dealer Information</span></a>
        <a href="#"><i class="fas fa-money-bill"></i><span>Orders</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src="../img/profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Head Of Marketing</h4>
      </div>
        <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fas fa-money-bill"></i><span>Late Payment Details</span></a>
        <a href="#"><i class="fa fa-users"></i><span>Dealer Information</span></a>
        <a href="#"><i class="fas fa-shopping-cart"></i><span>Orders</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="topic">
        <h3>New Orders</h3>
    </div>
            
            <div class="clearfix">
                <table>
                    <thead>
                        <tr>
                            <th style="width:15%">Order NO.</th>
                            <th style="width:15%">Dealer ID</th>
                            <th style="width:15%">Order Type</th>
                            <th style="width:15%">Date</th>
                            <th style="width:15%">Eligibility</th>
                            <th style="width:25%">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxxx xxxxxx</td>
                            <td>xx/xx/xxxx</td>
                            <td>xxxxxxxx</td>
                            <td>
                                <div class="btnfloat">
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                </div>
                            </td>   
                        </tr>
                        <tr>
                        <td>xxx</td>
                            <td>xxx</td>
                            <td>xxxx xxxxxx</td>
                            <td>xx/xx/xxxx</td>
                            <td>xxxxxxxx</td>
                            <td>
                                <div class="btnfloat">
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                </div>
                            </td>   
                        </tr>
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxxx xxxxxx</td>
                            <td>xx/xx/xxxx</td>
                            <td>xxxxxxxx</td>
                            <td>
                                <div class="btnfloat">
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                </div>
                            </td>   
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxxx xxxxxx</td>
                            <td>xx/xx/xxxx</td>
                            <td>xxxxxxxx</td>
                            <td>
                                <div class="btnfloat">
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                </div>
                            </td>   
                        </tr>
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxxx xxxxxx</td>
                            <td>xx/xx/xxxx</td>
                            <td>xxxxxxxx</td>
                            <td>
                                <div class="btnfloat">
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                </div>
                            </td>   
                        </tr>
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxxx xxxxxx</td>
                            <td>xx/xx/xxxx</td>
                            <td>xxxxxxxx</td>
                            <td>
                                <div class="btnfloat">
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                </div>
                            </td>   
                        </tr>
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxxx xxxxxx</td>
                            <td>xx/xx/xxxx</td>
                            <td>xxxxxxxx</td>
                            <td>
                                <div class="btnfloat">
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                </div>
                            </td>   
                        </tr>
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxxx xxxxxx</td>
                            <td>xx/xx/xxxx</td>
                            <td>xxxxxxxx</td>
                            <td>
                                <div class="btnfloat">
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                </div>
                            </td>   
                        </tr>
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxxx xxxxxx</td>
                            <td>xx/xx/xxxx</td>
                            <td>xxxxxxxx</td>
                            <td>
                                <div class="btnfloat">
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                </div>
                            </td>   
                        </tr>
                    </tbody>
                </table>
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