<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="stylesheet" type="text/css" href="../css/SCStockPage.css">
    <link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
    <link rel="stylesheet" href="../css/temp.css">
    <script language="JavaScript" src="../js/SCPriceListPage.js"></script>
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
        <a href="#"><i class="fa fa-list-ol"></i><span>Price List</span></a>
        <a href="#"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="#"><i class="fas fa-exclamation-circle"></i><span>Complaints</span></a>
        <a href="#"><i class="fa fa-comments"></i><span>Notify Dealers</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src="../img/profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Sales Co-ordinator</h4>
      </div>
        <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fa fa-list-ol"></i><span>Price List</span></a>
        <a href="#"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="#"><i class="fas fa-exclamation-circle"></i><span>Complaints</span></a>
        <a href="#"><i class="fa fa-comments"></i><span>Notify Dealers</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
	<div class="clearfix">
				<div class="left">
					<div class="tab">
						<button>Momali</button>
						<button>Ferroli</button>
						<button>Aquaflex</button>
					</div>
					<div class="content1">
						<table>
							<thead>
								<tr>
									<th style="width:20%">Item ID</th>
									<th style="width:60%">Name</th>
									<th style="width:20%">Quantity</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
                <div class="right">
					<form>
						<fieldset>
							<label>
								Item ID: <input type="text" name="id" size="50">
							</label>
							<button><i class="fa fa-search" aria-hidden="true"></i> Search</button><br/>
							<label>
								Item Name: <input type="text" name="iname" size="50">
							</label>
							<label>
								Quantity: <input type="text" name="price" size="50">
							</label>
							<input type="reset" value="Cancel">
						</fieldset>
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