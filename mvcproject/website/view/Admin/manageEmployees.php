<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Dealers</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Admin/div3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Admin/split5.css">
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
				<h1>Manage Employees</h1>
			</div>
		</div>
      
        <div class="wrapper clearfix">
            
            <div class="right">
                <div class="form">
                        <form name="myform" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'  method="POST" enctype="multipart/form-data" >
                        <fieldset>
                            <label>
                                Employee ID: <input type="text" name="id" id="id" size="50">
                            </label>
                            <button type="submit" name="search"><i class="fa fa-search" aria-hidden="true"></i> Search</button><br/>
                            <label>
                                Name: <input type="text" name="name" id="name" size="50">
                            </label>
                            <label>
                                Email: <input type="text" name="mail" id="mail" size="50">
                            </label>
                            <label>
                                Address: <input type="text" name="addresss" id="address" size="50">
                            </label>
                            <label>
                                Telephone: <input type="text" name="phone" id="phone" size="50">
                            </label>
                            <label>
                                Role:   
                                
                                    <select name="role" id="role">
                                            <option value="0">Select role:</option>
                                            <option value="Admin">Admin</option>
                                            <option value="se">Sales Executive</option>
                                            <option value="om">Operational Manager</option>
                                            <option value="acc">Accountant</option>
                                            <option value="hom">Head of Marketing</option>
                                            <option value="sc">Sales Coordinator</option>
                                    </select>
                                
                            </label>
                            </br></br>
                            <div class="formbtn">
                                <input type="submit" value="Add" name="add"></input>
                                <input type="submit" value="Update" name="update"></input> 
                            </div>
                            <div class="formbtn">
                                <input type="submit" value="Delete" name="delete"> </input>
                                <input type="submit" value="Clear" name="clear"></input>
                            </div>
                        </filedset>
                        </form>    
                    
                </div>
			      </div>
		   
			
			
            <div class="left">
                <div class="content1">
                    <table id="table1">

					
                    <thead>
                      <tr>
                      <th style="width=1%"> Employee Id </th>
                      <th style="width=5%"> Name </th>
                      <th style="width=5%"> Address </th>
                      <th style="width=5%"> Email </th>
                      <th style="width=5%"> Role </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> 1 </td>
                        <td> W.Perera </td>
                        <td> Battaramulla </td>
                        <td >per@gmail.com </td>
                        <td> OM </td>
                      </tr>
                      <tr>
                        <td> 2 </td>
                        <td> P.Lokuge </td>
                        <td> Thalangama </td>
                        <td >lok@gmail.com </td>
                        <td> SE </td>
                      </tr>
                      <tr>
                        <td> 3 </td>
                        <td> J.Gamage </td>
                        <td> Colombo7 </td>
                        <td >gam@gmail.com </td>
                        <td> HOM </td>
                      </tr>
                      <tr>
                        <td> 4 </td>
                        <td> R.Rathnayake </td>
                        <td> Moratuwa </td>
                        <td >rat@gmail.com </td>
                        <td> ACC </td>
                      </tr>
                      <tr>
                        <td> 5 </td>
                        <td> W.Gunasekara </td>
                        <td> Gampaha </td>
                        <td >gun@gmail.com </td>
                        <td> SE </td>
                      </tr>
                      <tr>
                        <td> 6 </td>
                        <td> G.Kapila </td>
                        <td> Panadura </td>
                        <td >kap@gmail.com </td>
                        <td> OM </td>
                      </tr>
                      <tr>
                        <td> 7 </td>
                        <td> S.Perera </td>
                        <td> Galle </td>
                        <td> per@gmail.com </td>
                        <td> ACC </td>
                      </tr>
                      <tr>
                        <td> 8 </td>
                        <td> S.Herath </td>
                        <td> Malabe</td>
                        <td >her@gmail.com </td>
                        <td> HOM </td>
                      </tr>
                      <tr>
                        <td> 9 </td>
                        <td> T.Perera </td>
                        <td> Koswatta</td>
                        <td> per@gmail.com </td>
                        <td> SE </td>
                      </tr>
                  </tbody>		
                </table>
              </div>
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