<?php require_once('../connect.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer AquaflexItem</title>
    <link rel="stylesheet" href="../css/dealerItemsPage.css">
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
        <a href="#"><i class="fas fa-cogs"></i><span>Item Order</span></a>
        <a href="#"><i class="fa fa-tv"></i><span>Display Board Order</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Order History</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Complaints</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>MyCart</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src="../img/profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Dealer</h4>
      </div>
      <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="#"><i class="fa fa-shopping-bag"></i><span>Item Order</span></a>
      <a href="#"><i class="fa fa-tv"></i><span>Display Board Order</span></a>
      <a href="#"><i class="fa fa-history"></i><span>Order History</span></a>
      <a href="#"><i class="fa fa-exclamation-circle"></i><span>Complaints</span></a>
      <a href="#"><i class="fa fa-cart-plus"></i><span>MyCart</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="clearfix">
				<div class="bar">
					<form>
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
			 	</div>
				<div class="contentItem">
					<?php
						$sql="select ItemName, Price, Image from item where Category='Aquaflex'";
						$result = mysqli_query($connection, $sql);
						if (mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_assoc($result)) {
					?>
								<div class="card">
									<img src="data:image/jpg;base64,<?php echo base64_encode( $row["Image"] ); ?>" style="width:100%"/>
									<h3><?php echo $row["ItemName"]; ?></h3>
									<div class="cart">
										<p><?php echo $row["Price"]; ?></p>
										<label>Quantity:</label>
										<input type="number" name="quantity" min="0" max="1000" step="50" value="0">
										<button><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button>  
									</div>
								</div>	
					<?php   }
						} else { 
							echo "No Items Found";
						}
					?>
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