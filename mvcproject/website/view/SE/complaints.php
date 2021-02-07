<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints to check</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/div3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/table1.css">
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
        <a href="dealer"><i class="fa fa-address-book" ></i><span>Dealer Info</span></a>
        <a href="notEligible"><i class="fa fa-info-circle"></i><span>Not Eligible List</span></a>
        <a href="newOrder"><i class="fa fa-shopping-cart"></i><span>New Orders</span></a>
        <a href="payment"><i class="fa fa-money-bill"></i><span>Collected Payments</span></a>
        <a href="complaint><i class="fa fa-exclamation-circle"></i><span>Complaints to Check</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src=".././public/img/Profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Sales Executive</h4>
      </div>
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="dealer"><i class="fa fa-address-book" ></i><span>Dealer Info</span></a>
        <a href="notEligible"><i class="fa fa-info-circle"></i><span>Not Eligible List</span></a>
        <a href="newOrder"><i class="fa fa-shopping-cart"></i><span>New Orders</span></a>
        <a href="payment"><i class="fa fa-money-bill"></i><span>Collected Payments</span></a>
        <a href="complaint"><i class="fa fa-exclamation-circle"></i><span>Complaints to Check</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="wrapper clearfix">
      <div class ="topic">
				<h1>Complaints</h1>
			</div>
		</div>

		<div class="wrapper clearfix">
		  <div class="content1">
				<table id="table1">
     					<thead>
        					<tr>
								<th style="width:20%"> Invoice No </th>
								<th style="width:40%"> Photos </th>
								<th style="width:40%"> Complaint </th>
							</tr>
						</thead>
							<tbody>
								<tr>
									<td> 1 </td>
									<td>
                    <img src=".././public/img/a5.jpg" width="100" height="100" alt="complaint">
                    <img src=".././public/img/a1.jpg" width="100" height="100" alt="complaint">
                  </td>
									<td> shower item damaged while delivering </td>
									
								</tr>
								<tr>
									<td> 2 </td>
									<td>
                    <img src=".././public/img/m5.jpg" width="100" height="100" alt="complaint">
                  </td>
									<td> basin tap does not fit</td>
									
							    </tr>
								<tr>
									<td> 3 </td>
									<td>
                    <img src=".././public/img/m4.jpg" width="100" height="100" alt="complaint">
                  </td>
									<td> shower head broken </td>
									</tr>
								<tr>
									<td> 4 </td>
									<td>
                    <img src=".././public/img/m6.jpg" width="100" height="100" alt="complaint">
                  </td>
									<td> single faucet has broken while delivering </td>
									
							    </tr>
								<tr>
									<td> 5 </td>
									<td>
                    <img src=".././public/img/m8.jpg" width="100" height="100" alt="complaint">
                  </td>
									<td> bided hand mixer has broken </td>
									
								</tr>
								<tr>
									<td> 6 </td>
									<td>
                    <img src=".././public/img/m8.jpg" width="100" height="100" alt="complaint">
                  </td>
									<td> angle valve cannot install </td>
									
								</tr>
								<tr>
									<td> 7 </td>
									<td>
                    <img src=".././public/img/f2.jpg" width="100" height="100" alt="complaint">
                  </td>
									<td> cubo has broken </td>
								</tr>
								<tr>
									<td> 8 </td>
									<td>
                    <img src=".././public/img/f7.jpg" width="100" height="100" alt="complaint">
                  </td>
									<td> verdi_DE cannot install </td>
									
								</tr>
								<tr>
									<td> 9 </td>
									<td>
                    <img src=".././public/img/a7.jpg" width="100" height="100" alt="complaint">
                  </td>
									<td> bathtub has broken while delivering </td>
									
						        </tr>
								<tr>
									<td> 10 </td>
									<td>
                    <img src=".././public/img/a8.jpg" width="100" height="100" alt="complaint">
                  </td>
									<td> Wall mounted thambler has broken </td>
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