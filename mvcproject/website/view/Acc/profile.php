<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ProfilePage</title>
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Acc/profile.css">
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
        <a href="history"><i class="fa fa-history"></i><span>Payment History</span></a>
        <a href="report"><i class="fa fa-book"></i><span>Report Generation</span></a>
        <a href="collection"><i class="fas fa-money-bill"></i><span>Payment by SE</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src=".././public/img/Profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Accountant</h4>
      </div>
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="history"><i class="fa fa-history"></i><span>Payment History</span></a>
        <a href="report"><i class="fa fa-book"></i><span>Report Generation</span></a>
        <a href="collection"><i class="fas fa-money-bill"></i><span>Payment by SE</span></a>
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
                <hr />
                <div class="logo">
                    <h2>Brandlink Overseas</h2>
                    <p>No 125/D, Kalalgoda, Pannipitiya, Sri Lanka<br/></p>
                    <p>0094(0)777282324<br /></p>
                    <p>branklink@slt.lk</p>
                </div>
                <div class="footer">
                    <h3>copyright &copy; BrandlinkOverseas.lk</h3>
                    <a href="https://www.facebook.com"><img class="first" src="<?php echo URL; ?>public/img/fb.png" width=40px height=40px></a>
                    <a href="https://www.instagram.com/?hl=en"><img class="mid" src="<?php echo URL; ?>public/img/insta.png" width=60px height=40px></a>
                    <a href="https://twitter.com/"><img class="last" src="<?php echo URL; ?>public/img/twitter.png" width=40px height=40px></a>
                </div>
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