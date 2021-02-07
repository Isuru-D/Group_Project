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
        <a href="dealers"><i class="fa fa-book"></i><span>Dealer Information</span></a>
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
				<h1>Dealer Details</h1>
			</div>
    </div>
    
    <div class="wrapper clearfix">
			<div class="content1">
				<table id="table1">
                    <thead>
                        <tr>
                            <th style="width:15%">Dealer ID</th>
                            <th style="width:20%">Name</th>
                            <th style="width:20%">Telephone NO</th>
                            <th style="width:15%">Due Orders</th>
                            <th style="width:15%">Due Amount</th>
                            <th style="width:20%">Due Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>W.Perera</td>
                            <td>123456</td>
                            <td>1</td>
                            <td>20000.00</td>
                            <td>1-2-2020</td>   
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>C.Herath</td>
                            <td>55674547</td>
                            <td>4</td>
                            <td>12000.00</td>
                            <td>3-9-2020</td>   
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>K.Kalpa</td>
                            <td>08896367</td>
                            <td>6</td>
                            <td>3000.00</td>
                            <td>9-8-2020</td>   
                        <tr>
                            <td>4</td>
                            <td>P.Gamage</td>
                            <td>1255647</td>
                            <td>3</td>
                            <td>3000.00</td>
                            <td>2-9-2020</td>   
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>S.Kamal</td>
                            <td>90676362</td>
                            <td>6</td>
                            <td>8000.00</td>
                            <td>4-6-2020</td>   
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>S.Kumara</td>
                            <td>4572627</td>
                            <td>10</td>
                            <td>19000.00</td>
                            <td>9-10-2020</td>   
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>A.Amal</td>
                            <td>1237978</td>
                            <td>11</td>
                            <td>2000.00</td>
                            <td>2-2-2020</td>   
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>K.Kasun</td>
                            <td>3232899</td>
                            <td>8</td>
                            <td>20000.00</td>
                            <td>1-10-2020</td>   
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>P.Wattuhewa</td>
                            <td>56576783</td>
                            <td>7</td>
                            <td>9000.00</td>
                            <td>2-4-2020</td>   
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>L.Lasith</td>
                            <td>4572728</td>
                            <td>3</td>
                            <td>3000.00</td>
                            <td>13-3-2020</td>   
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