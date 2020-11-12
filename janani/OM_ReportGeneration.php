<head>
<title>OM report generation</title>
<link rel="stylesheet" type="text/css" href="./css/nav1.css">
<link rel="stylesheet" type="text/css" href="./css/div3.css">
<link rel="stylesheet" type="text/css" href="./css/report1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	
    body {
        background-color: #000;
  		background-image: url("img/black.jpg");
  		background-size: cover;
  		background-position: top center;
      }
   
</style>

</head>

<body>
    <div class="container">
        <div class="header">
		<div class="navbar">
			
					<a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
  					<a href="OM_ApprovedOrders.php"><i class="fa fa-check-square" aria-hidden="true"></i>Approved Orders</a>
					<a href="OM_Stock.php"><i class="fa fa-houzz" aria-hidden="true"></i>Stock</a>
					<a href="OM_SparePartStock.php"><i class="fa fa-cog" aria-hidden="true"></i>Spare Part Stock</a>  
					<a href="OM_ReportGeneration.php"><i class="fa fa-file" aria-hidden="true"></i>Reports</a>   
					<a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
		</div>
		
        <div class="wrapper clearfix">
            <div class ="header">
				<h1>Report Generation</h1>
			</div>
		</div>
      
        <div class="wrapper clearfix">
            <div class="dropdown1">
    					<button class="dropbtn1"><i class="fa fa-sort" aria-hidden="true"></i>	Stock Issue Report
      					</button>
    					<div class="dropdown1-content1">
      						<a href="#">Monthly</a>
      						<a href="#">Annualy </a>
     					</div>
              </div> 

              <div class="dropdown2">
    					<button class="dropbtn2"><i class="fa fa-sort" aria-hidden="true"></i>	Spare Part Stock Issue Report
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
								<th> Part_no </th>
								<th> Name </th>
								<th> Unit Price </th>
								<th> Quantity </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td> 1 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
								</tr>
								<tr>
									<td> 2 </td>
									<td> xxx </td>	
									<td> xxx </td>
									<td> xxx </td>
								</tr>
								<tr>
									<td> 3 </td>
									<td> xxx </td>	
									<td> xxx </td>
									<td> xxx </td>
								</tr>
								<tr>
									<td> 4 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
								</tr>
								<tr>
									<td> 5 </td>
									<td> xxx </td>	
									<td> xxx </td>
									<td> xxx </td>
								</tr>
								<tr>
									<td> 6 </td>
									<td> xxx </td>	
									<td> xxx </td>
									<td> xxx </td>
								</tr>
								<tr>
									<td> 7 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
								</tr>
								<tr>
									<td> 8 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
								</tr>
								<tr>
									<td> 9 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
								</tr>
								<tr>
									<td> 10 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
								</tr>
								<tr>
									<td> 11 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
								</tr>
								<tr>
									<td> 12 </td>
									<td> xxx </td>
									<td> xxx </td>
									<td> xxx </td>
								</tr>
							<tr>
								<td> 13 </td>
								<td> xxx </td>
								<td> xxx </td>
								<td> xxx </td>
							</tr>
						</tbody>
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