<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Dealers</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Admin/div3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Admin/table1.css">
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
        <a href="ManageDealers"><i class="fa fa-address-book"></i><span>Manage Dealers</span></a>
        <a href="employees"><i class="fa fa-users"></i><span>Manage Employee</span></a>
        <a href="pendingDealers"><i class="fa fa-user"></i><span>Pending Dealers</span></a>
        <a href="report"><i class="fa fa-file"></i><span>Reports</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src=".././public/img/Profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Admin</h4>
      </div>
      <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="ManageDealers"><i class="fa fa-address-book"></i><span>Manage Dealers</span></a>
        <a href="employees"><i class="fa fa-users"></i><span>Manage Employee</span></a>
        <a href="pendingDealers"><i class="fa fa-user"></i><span>Pending Dealers</span></a>
        <a href="report"><i class="fa fa-file"></i><span>Reports</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="wrapper clearfix">
      <div class ="topic">
				<h1>Pending Dealers</h1>
			</div>
		</div>

		<div class="wrapper clearfix">
			<div class="content1">
				<table id="table1">
     					<thead>
        					<tr>
								<th style="width:10%"> Dealer ID </th>
								<th style="width:20%"> Name </th>
								<th style="width:20%"> Address </th>
								<th style="width:20%"> Email </th>
                <th style="width:10%"> Contact Number </th>
                <th style="width=10%">Option</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td> 1 </td>
									<td> W.S.Perera </td>
									<td> 44,Battaramulla </td>
									<td >perera@gmail.com </td>
                  <td> 0112976077 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
								<tr>
									<td> 2 </td>
									<td> S.P.Herath </td>
									<td> 55,Malabe</td>
									<td >herath@gmail.com </td>
                  <td> 077865466 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
								<tr>
									<td> 3 </td>
									<td> P.H.Lokuge </td>
									<td> 23,Thalangama </td>
									<td >lokuge@gmail.com </td>
                  <td> 055685689 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
								<tr>
									<td> 4 </td>
									<td> T.H.Perera </td>
									<td> 43,Koswatta</td>
									<td >perera@gmail.com </td>
                  <td> 022346482 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
								<tr>
									<td> 5 </td>
									<td> J.Y.Gamage </td>
									<td> 34,Colombo7 </td>
									<td >gamage@gmail.com </td>
                  <td> 011264837 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
								<tr>
									<td> 6 </td>
									<td> T.P.Wattuhewa </td>
									<td> 21,Kaluthara </td>
									<td >wattu@gmail.com </td>
                  <td> 07786567 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
								<tr>
									<td> 7 </td>
									<td> R.S.Rathnayake </td>
									<td> 55,Moratuwa </td>
									<td >ratnayake@gmail.com </td>
                  <td> 12236367 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
								<tr>
									<td> 8 </td>
									<td> W.K.Gunasekara </td>
									<td> 89,Gampaha </td>
									<td >gune@gmail.com </td>
                  <td> 099873847 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
								<tr>
									<td> 9 </td>
									<td> G.H.Kapila </td>
									<td> 23,Panadura </td>
									<td >kapila@gmail.com </td>
                  <td> 07786756 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
								<tr>
									<td> 10 </td>
									<td> S.S.Perera </td>
									<td> 66,Galle </td>
									<td >perera@gmail.com </td>
                  <td> 45272828 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
								<tr>
									<td> 11 </td>
									<td> G.H.Seneviratna </td>
									<td> 34,Nugegoda </td>
									<td >sene@gmail.com </td>
                  <td> 2323423 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
								<tr>
									<td> 12 </td>
									<td> P.L.Kapuge </td>
									<td> 44,Waliweriya </td>
									<td >kapu@gmail.com </td>
                  <td> 12343432 </td>
                  <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
                  </td>
								</tr>
							<tr>
								<td> 13 </td>
								<td> J.Y.Perera </td>
								<td> 90,Nuwara </td>
								<td >per@gmail.com </td>
                <td> 78886587 </td>
                <td>
                    <button class="btn"><i class="fa fa-check"></i>Approve</button>
                    <button class="btn"><i class="fa fa-times"></i></a>Reject</button>
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