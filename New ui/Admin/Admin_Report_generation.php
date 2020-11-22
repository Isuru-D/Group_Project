<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Dealers</title>
    <link rel="stylesheet" type="text/css" href="../css/div3.css">
    <link rel="stylesheet" type="text/css" href="../css/report2.css">
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
        <a href="#"><i class="fa fa-history"></i><span>Payment History</span></a>
        <a href="#"><i class="fa fa-book"></i><span>Report Generation</span></a>
        <a href="#"><i class="fas fa-money-bill"></i><span>Payment by SE</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src="../img/profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Admin</h4>
      </div>
        <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fa fa-address-book"></i><span>Manage Dealers</span></a>
        <a href="#"><i class="fa fa-users"></i><span>Manage Employee</span></a>
        <a href="#"><i class="fa fa-user"></i><span>Pending Dealers</span></a>
        <a href="#"><i class="fa fa-user"></i><span>Pending Dealers</span></a>
        <a href="#"><i class="fa fa-file"></i><span>Reports</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="wrapper clearfix">
            <div class ="topic">
				<h1>Report Generation</h1>
			</div>
		</div>
      
        <div class="wrapper clearfix">
            <div class="dropdown1">
    					<button class="dropbtn1"><i class="fa fa-sort" aria-hidden="true"></i>	Sales Report
      					</button>
    					<div class="dropdown1-content1">
      						<a href="#">Monthly</a>
      						<a href="#">Annualy </a>
     					</div>
              </div> 

              <div class="dropdown2">
    					<button class="dropbtn2"><i class="fa fa-sort" aria-hidden="true"></i>	Repair Report
      					</button>
    					<div class="dropdown2-content2">
      						<a href="#">Monthly</a>
      						<a href="#">Annualy </a>
     					</div>
              </div> 
        </div>

        <div class="wrapper clearfix">
            <div class="date">
                <input type="date" id="date" name="date">
                <input type="button" value="Generate">
            </div>
           
            <div class="date1">
                <input type="date" id="date" name="date">
                <input type="button" value="Generate">
            </div>
            
        </div>

        <div class="wrapper clearfix">
            <div class="table-scroll">
  			<div class="faux-table" aria="hidden"></div>
  				<div class="table-wrap">
    				<table class="main-table">
     					<thead>
        					<tr>
								<th> Order_no </th>
								<th> Dealer Name </th>
								<th> Items </th>
								<th> Quantity </th>
                                <th> Amount </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td> 1 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
								<tr>
									<td> 2 </td>
									<td> xxx </td>	
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
								<tr>
									<td> 3 </td>
									<td> xxx </td>	
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
								<tr>
									<td> 4 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
								<tr>
									<td> 5 </td>
									<td> xxx </td>	
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
								<tr>
									<td> 6 </td>
									<td> xxx </td>	
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
								<tr>
									<td> 7 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
								<tr>
									<td> 8 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
								<tr>
									<td> 9 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
								<tr>
									<td> 10 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
								<tr>
									<td> 11 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
								<tr>
									<td> 12 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
                                    <td> xxx </td>
								</tr>
							<tr>
								<td> 13 </td>
								<td> xxx </td>
								<td> xxx </td>
								<td> xxx </td>
                                <td> xxx </td>
							</tr>
						</tbody>
					</table>
				</div>
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