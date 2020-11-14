
<html>


<head>
<title>ADMIN MANAGE EMPLOYESS</title>
<link rel="stylesheet" type="text/css" href="./css/nav1.css">
<link rel="stylesheet" type="text/css" href="./css/div3.css">
<link rel="stylesheet" type="text/css" href="./css/split7.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	
    body {
        background-color: #000;
  		background-image: url("img/black.jpg");
  		background-size: cover;
  		background-position: top center;
      }
      
    
    table.a {
        table-layout: auto;
        width: 100%;
    }
    
     
</style>

</head>

<body>
    <div class="container">
        <div class="header">
		<div class="navbar">
			
                    <a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                      <div class="dropdown">
                      <button class="dropbtn"><i class="fa fa-address-book" aria-hidden="true"></i>Manage Users
                      </button>
                        <div class="dropdown-content">
                            <a href="Admin_ManageDealers.php">Manage Dealers</a>
                            <a href="Admin_ManageEmployees">Manage Employees</a>
                        </div>
                        </div>
					<a href="Admin_PendingDealers"><i class="fa fa-user" aria-hidden="true"></i>Pending Dealers</a>
					<a href="Admin_ReportGeneration.php"><i class="fa fa-file" aria-hidden="true"></i>Reports</a>   
					<a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
		</div>
		
        <div class="wrapper clearfix">
            <div class ="header">
				<h1>Manage Employees</h1>
			</div>
		</div>
      
        <div class="wrapper clearfix">
            
            <div class="right">
                <div class="form">
                    <form name="myform" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'  method="POST" enctype="multipart/form-data" >
                    <table class="a">
                        
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-25">
                                <label for="id">Emp_ID</label>
                                </div>
                                <div class="col-30">
                                <input type="text" id="id" name="dealerid">
                                
                                </div>
                            </div>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-25">
                                <label for="name">Name</label>
                                </div>
                                <div class="col-30">
                                <input type="text" id="name" name="dealerName">
                                
                                </div>
                                
                            </div>
                            </td>
                    </tr>
                    <tr>
                            <td>
                            <div class="row">
                                <div class="col-25">
                                <label for="email">Email</label>
                                </div>
                                <div class="col-30">
                                <input type="text" id="email" name="email">
                                
                                </div>
                            </div>
                            </td>
                    </tr>
                    <tr>
                            <td>
                            <div class="row">
                                <div class="col-25">
                                <label for="address">Address</label>
                                </div>
                                <div class="col-30">
                                <input type="text" id="address" name="address">
                                
                                </div>
                            </div>
                            </td>
                    </tr>
                    <tr colaspan='2'>
                            <td>
                            <div class="row">
                                <div class="col-25">
                                <label for="role">Role</label>
                                </div>
                                <div class="col-30">
                                <select name="role" id="role">
									<option value="Admin">Admin</option>
									<option value="se">Sales Executive</option>
									<option value="om">Operational Manager</option>
									<option value="acc">Accountant</option>
									<option value="hom">Head of Marketing</option>
									<option value="sc">Sales Coordinator</option>
								</select>
                                </div>
                            </div>
                            </td>
                    </tr>
                    </table>

                        <div class="row">
                        <input type="submit" value="Search" name="search">
                        <input type="submit" value="Add" name="add">
                        <input type="submit" value="Update" name="update">
                        <input type="submit" value="Delete" name="delete">
                        </div>
                    </form>
                </div>
			</div>
		   
			
			
            <div class="left">
            <div class="table-scroll">
  			<div class="faux-table" aria="hidden"></div>
  				<div class="table-wrap">
    				<table class="main-table">

					
     					
        					<tr>
								<th> Employee Id </th>
								<th> Name </th>
								<th> Email </th>
								<th> Address </th>
								<th> Role </th>
							</tr>
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
								
					</table>
				</div>
			</div>
            </div>

        </div>
		
		
		

		<div class="wrapper clearfix">
        <div class="footercontent">
        	<div class="logo">
				<img src="img/logo.png" height =100px width=320px>
			</div>
			<div class="footer">
					<h3>copyright &copy; BrandlinkOverseas.lk</h3>
					<a href="https://www.facebook.com"><img src="img/fb.png" width=40px height=40px></a>
					<a href="https://www.instagram.com/?hl=en"><img src="img/insta.png" width=60px height=40px></a>
					<a href="https://twitter.com/"><img src="img/twitter.png" width=40px height=40px></a>
			</div>
		</div>
        </div>
	</div>

</body>
</html>


