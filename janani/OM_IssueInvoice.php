<head>
<title>OM Invoice Issue</title>
<link rel="stylesheet" type="text/css" href="./css/nav1.css">
<link rel="stylesheet" type="text/css" href="./css/div3.css">
<link rel="stylesheet" type="text/css" href="./css/split3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	
    body {
        background-color: #000;
  		background-image: url("img/background.jpg"); 
  		background-size: cover;
  		background-position: top center;
      }
    input[type=date] {
        top:0;
        border-radius: 4px;
        resize: vertical;
        float: right;
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