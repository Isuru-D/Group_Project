<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Invoice</title>
    <link rel="stylesheet" type="text/css" href="../css/div3.css">
    <link rel="stylesheet" type="text/css" href="../css/split3.css">
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
        <a href="#"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="#"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="#"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="#"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src="../img/profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Operational Manager</h4>
      </div>
        <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="#"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="#"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="#"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="wrapper clearfix">
      <div class ="topic">
				<h1>Issue Invoice</h1>
			</div>
		</div>
        
        <div class="wrapper clearfix">
            <div class="left1">
                <div class="form">
                    <form>
                        <div class="row">
                            <div class="col-25">
                            <label for="invoice">Invoice No</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="invoice" name="InoiceNo" required>
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
                            <label for="address">Address</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="address" name="address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                            <label for="email">Email</label>
                            </div>
                            <div class="button">
                            <input type="button" value="Send Invoice" required>
                            </div>
                            <div class="col-75">
                            <input type="text" id="email" name="email" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="right1">
                <input type="date" id="date" name="date">
                <div class="table-scroll">
                    <div class="faux-table" aria="hidden"></div>
                        <div class="table-wrap">
                            <table class="main-table">
                                <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> xxx </td>
                                            <td> xxx </td>
                                            
                                        </tr>
                                        <tr>
                                            <td> 2 </td>
                                            <td> xxx </td>    
                                            <td> xxx </td>
                                        </tr>
                                        <tr>
                                            <td> 3 </td>
                                            <td> xxx </td>    
                                            <td> xxx </td>
                                        </tr>
                                        <tr>
                                            <td> 4 </td>
                                            <td> xxx </td>    
                                            <td> xxx </td>
                                        </tr>
                                        <tr>
                                            <td> 5 </td>
                                            <td> xxx </td>    
                                            <td> xxx </td>
                                        </tr>
                                        <tr>
                                            <td> 6 </td>
                                            <td> xxx </td>    
                                            <td> xxx </td>
                                        </tr>
                                        <tr>
                                            <td> 7 </td>
                                            <td> xxx </td>   
                                            <td> xxx </td>
                                        </tr>
                                        <tr>
                                            <td> 8 </td>
                                            <td> xxx </td>  
                                            <td> xxx </td>
                                        </tr>
                                        <tr>
                                            <td> 9 </td>
                                            <td> xxx </td>   
                                            <td> xxx </td>
                                        </tr>
                                        <tr>
                                            <td> 10 </td>
                                            <td> xxx </td>   
                                            <td> xxx </td>
                                        </tr>
                                        <tr>
                                            <td> 11 </td>
                                            <td> xxx </td>   
                                            <td> xxx </td>
                                        </tr>
                                        <tr>
                                            <td> 12 </td>
                                            <td> xxx </td>
                                            <td> xxx </td>
                                        </tr>
                                    <tr>
                                        <td> 13 </td>
                                        <td> xxx </td>
                                        <td> xxx </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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