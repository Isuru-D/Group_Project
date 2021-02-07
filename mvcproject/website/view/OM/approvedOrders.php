<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Orders</title>
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
        <a href="orders"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="stockMomali"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="sparePartMomali"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="report"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src=".././public/img/Profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Operational Manager</h4>
      </div>
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="orders"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="stockMomali"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="sparePartMomali"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="report"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="clearfix">
      <div class ="topic">
				<h1>Approved Orders</h1>
			</div>
		</div>

		<div class="wrapper clearfix">
		  <div class="content1">
				<table id="table">
     					<thead>
        					<tr>
                    <th style="width:11%"> Order No </th>
                    <th style="width:15%"> Name </th>
                    <!-- <th> Address </th> -->
                    <th style="width:15%"> Contact No </th>
                    <th style="width:15%"> Items </th>
                    <th style="width:10%"> Quantity </th>
                    <th style="width:15%"> Amount </th>
                    <th style="width:15%"> Option </th>
								  </tr>
							</thead>
							<tbody>
								<tr>
									<td> 1 </td>
									<td> W.S.Perera </td>
									<!-- <td> Colombo</td> -->
									<td> 0112076077 </td>
                  <td> Shower </td>
                  <td> 70 </td>
									<td> 45000.00 </td>
									<td>
                      <button><i class="fa fa-archive" aria-hidden="true"></i>Update</button>
                      <a href="invoice"><button><i class="	fa fa-file"></i>Issue Invoice</button></a>
                  </td>
								</tr>
								<tr>
									<td> 2 </td>
									<td> S.K.Ranasingha </td>
									<!-- <td> Kandy </td> -->
									<td> 07863567 </td>
                  <td> basin bath </td>
                  <td> 40 </td>
									<td> 70800.00 </td>
									<td>
                    <button><i class="fa fa-archive" aria-hidden="true"></i>Update</button>
                    <a href="invoice"><button><i class="	fa fa-file"></i>Issue Invoice</button></a>
                  </td>
								</tr>
								<tr>
									<td> 3 </td>
									<td> I.K.Samarasingha </td>
									<!-- <td> Kaluthara </td> -->
									<td> 08873537 </td>
                  <td> faucet shower </td>
                  <td> 20 </td>
									<td> 10000.00 </td>
									<td>
                    <button><i class="fa fa-archive" aria-hidden="true"></i>Update</button>
                    <a href="invoice"><button><i class="	fa fa-file"></i>Issue Invoice</button></a>
                  </td>
								</tr>
								<tr>
									<td> 4 </td>
									<td> J.J.Perera </td>
									<!-- <td> Battaramulla </td> -->
									<td> 022345645 </td>
                  <td> hand mixer </td>
                  <td> 23 </td>
									<td> 500.00 </td>
									<td>
                    <button><i class="fa fa-archive" aria-hidden="true"></i>Update</button>
                    <a href="invoice"><button><i class="	fa fa-file"></i>Issue Invoice</button></a>
                  </td>
								</tr>
								<tr>
									<td> 5 </td>
									<td> S.W.Kumara </td>
									<!-- <td> Kaduwela </td> -->
									<td> 08989743 </td>
                  <td> bip tap </td>
                  <td> 50 </td>
									<td> 400.00 </td>
									<td>
                    <button><i class="fa fa-archive" aria-hidden="true"></i>Update</button>
                    <a href="invoice"><button><i class="	fa fa-file"></i>Issue Invoice</button></a>
                  </td>
								</tr>
								<tr>
									<td> 6 </td>
									<td> W.U.Kapila </td>
									<!-- <td> Malabe </td> -->
									<td> 2323232 </td>
                  <td> cubo </td>
                  <td> 23 </td>
									<td> 1000.00 </td>
									<td>
                    <button><i class="fa fa-archive" aria-hidden="true"></i>Update</button>
                    <a href="invoice"><button><i class="	fa fa-file"></i>Issue Invoice</button></a>
                  </td>
								</tr>
								<tr>
									<td> 7 </td>
									<td> J.P.Nuwan </td>
									<!-- <td> Koswatta </td> -->
									<td> 2321313 </td>
                  <td> QQ M </td>
                  <td> 10 </td>
									<td> 2000.00 </td>
									<td>
                    <button><i class="fa fa-archive" aria-hidden="true"></i>Update</button>
                    <a href="invoice"><button><i class="	fa fa-file"></i>Issue Invoice</button></a>
                  </td>
								</tr>
								<tr>
									<td> 8 </td>
									<td> P.P.Pathirana </td>
									<!-- <td> Nuwara </td> -->
									<td> 1234454 </td>
                  <td> SB </td>
                  <td> 20 </td>
									<td> 3000.00 </td>
									<td>
                    <button><i class="fa fa-archive" aria-hidden="true"></i>Update</button>
                    <a href="invoice"><button><i class="	fa fa-file"></i>Issue Invoice</button></a>
                  </td>
								</tr>
								<tr>
									<td> 9 </td>
									<td> S.N.Perera </td>
									<!-- <td> Colombo </td> -->
									<td> 232132 </td>
                  <td> verdi-SE </td>
                  <td> 10 </td>
									<td> 2000.00 </td>
									<td>
                    <button><i class="fa fa-archive" aria-hidden="true"></i>Update</button>
                    <a href="invoice"><button><i class="	fa fa-file"></i>Issue Invoice</button></a>
                  </td>
								</tr>
								<tr>
									<td> 10 </td>
									<td> W.J.Gamage </td>
									<!-- <td> Panadura </td> -->
									<td> 4342424 </td>
                  <td> bathtub </td>
                  <td> 10 </td>
									<td> 3000.00 </td>
									<td>
                    <button><i class="fa fa-archive" aria-hidden="true"></i>Update</button>
                    <a href="invoice"><button><i class="	fa fa-file"></i>Issue Invoice</button></a>
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