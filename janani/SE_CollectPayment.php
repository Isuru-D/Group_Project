<head>
<title>SE collect payments</title>
<link rel="stylesheet" type="text/css" href="./css/nav1.css">
<link rel="stylesheet" type="text/css" href="./css/div3.css">
<link rel="stylesheet" type="text/css" href="./css/form2.css">
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
  					<a href="SE_DealerInfo.php"><i class="fa fa-address-book" aria-hidden="true"></i>Dealer Info</a>
					<a href="SE_NotEligible.php"><i class="fa fa-info-circle" aria-hidden="true"></i>Not Eligible List</a>
					<a href="SE_NewOrders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>New Orders</a>  
					<a href="SE_CollectPayment.php"><i class="fa fa-money" aria-hidden="true"></i>Collected Payments</a>  
					<a href="SE_Complaints.php"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>Complaints to Check</a>  
					<a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
		</div>
		
        <div class="wrapper clearfix">
            <div class ="header">
				<h1>Collected Payments</h1>
			</div>
		</div>
        
        <div class="wrapper clearfix">
		<div class="form">
            <form>
                <div class="row">
                    <div class="col-25">
                    <label for="invoice">Invoice No</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="invoice" name="InoiceNo" required>
                    <input type="button" value="Find">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="id">Dealer id</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="id" name="deaerId" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="amount">Amount</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="amount" name="amount" required>
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
                    <label for="date">Date</label>
                    </div>
                    <div class="col-75">
                    <input type="date" id="date" name="date" required>
                    <input type="checkbox" id="copy" name="copy" value="Copy">
                    <label for="copy"> Send a copy to HOM</label>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
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