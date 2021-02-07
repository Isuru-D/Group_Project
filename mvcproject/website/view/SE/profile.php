<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ProfilePage</title>
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/SE/profile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <style>
	 		body {
				background-color: white;
				background-image: url("<?php echo URL; ?>public/img/homeback.jpg");
	 		}
		</style>
    </head>
    <body>
        <input type="checkbox" id="check">
		<header>
            <label for="check">
                <i class="fa fa-bars" id="sidebar_btn"></i>
            </label>
            <div class="left_area">
                <h3>BrandLink<span>Overseas</span></h3>
            </div>
            <div class="right_area">
                <a href="../Login/log" class="logout_btn">Logout</a>
            </div>
		</header>
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
            <div class="clearfix">
                <form>
                    <fieldset>
                        <label>Username: </label>
                        <input type="text" name="username" size="50"><br />

                        <label>Password: </label>
                        <input type="password" name="password" size="50"><br />
                        <div class="password"><input type="submit" value="Change Password"></div>
                    
                        <label>Name: </label>
                        <input type="text" name="name" size="50"><br />
                        
                        <label>Address: </label>
                        <input type="text" name="address" size="50">
                        
                        <label>Email: </label>
                        <input type="email" name="mail" size="50">
                        
                        <label>Telephone: </label>
                        <input type="tel" name="telephone" size="50">
                     
                        <input type="submit" value="Save Changes">
                    </fieldset>
                </form>
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