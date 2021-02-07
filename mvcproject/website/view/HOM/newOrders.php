<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Details</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/HOM/div3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/HOM/table1.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/Common/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
  <style>
	 		body {
       			background-color: white;
                background-image: url("<?php echo URL; ?>public/img/homeback.jpg");
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
        <a href="../Login/log" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="latePayments"><i class="fa fa-history"></i><span>Late Payment Details</span></a>
        <a href="delaers"><i class="fa fa-book"></i><span>Dealer Information</span></a>
        <a href="newOrders"><i class="fas fa-money-bill"></i><span>Orders</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src=".././public/img/Profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Head Of Marketing</h4>
      </div>
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="latePayments"><i class="fas fa-money-bill"></i><span>Late Payment Details</span></a>
        <a href="dealers"><i class="fa fa-users"></i><span>Dealer Information</span></a>
        <a href="newOrders"><i class="fas fa-shopping-cart"></i><span>Orders</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="wrapper clearfix">
      <div class ="topic">
				<h1>New Orders</h1>
			</div>
    </div>
            
    <div class="wrapper clearfix">
			<div class="content1">
				<table id="table1">
                    <thead>
                        <tr>
                            <th style="width:15%">Order NO</th>
                            <th style="width:15%">Dealer ID</th>
                            <th style="width:30%">Order Type</th>
                            <th style="width:20%">Date</th>
                            <th style="width:15%">Eligibility</th>
                            <th style="width:35%">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12</td>
                            <td>item order</td>
                            <td>3-2-2020</td>
                            <td>eligible</td>
                            <td>
                                
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                               
                            </td>   
                        </tr>
                        <tr>
                        <td>2</td>
                            <td>3</td>
                            <td>display board order</td>
                            <td>12-2-2020</td>
                            <td>eligible</td>
                            <td>
                                
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                
                            </td>   
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>4</td>
                            <td>item order</td>
                            <td>3-3-2020</td>
                            <td>not eligible</td>
                            <td>
                                
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                
                            </td>   
                        <tr>
                            <td>4</td>
                            <td>5</td>
                            <td>display board order</td>
                            <td>9-9-2020</td>
                            <td>not eligible</td>
                            <td>
                                
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                
                            </td>   
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>6</td>
                            <td>item order</td>
                            <td>3-5-2020</td>
                            <td>not eligible</td>
                            <td>
                                
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                
                            </td>   
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>7</td>
                            <td>item order</td>
                            <td>6-6-2020</td>
                            <td>eligible</td>
                            <td>
                                
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                
                            </td>   
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>8</td>
                            <td>display board order</td>
                            <td>8-10-2020</td>
                            <td>eligible</td>
                            <td>
                            
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                
                            </td>   
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>9</td>
                            <td>display board order</td>
                            <td>4-4-2020</td>
                            <td>eligible</td>
                            <td>
                               
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                
                            </td>   
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>10</td>
                            <td>item order</td>
                            <td>6-6-2020</td>
                            <td>eligible</td>
                            <td>
                               
                                    <button><i class="fa fa-check-circle" aria-hidden="true"></i> Confirm</button>
                                    <button><i class="fa fa-times-circle" aria-hidden="true"></i> Deny</button>
                                    <button><i class="fa fa-arrow-right" aria-hidden="true"></i> Notify SE</button>
                                
                            </td>   
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    <div class="footercontent">
        <?php require_once(realpath(dirname(__FILE__) . '/../Common/footer.php'));?>
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