<head>
<title>SE new orders</title>
<link rel="stylesheet" type="text/css" href="./css/nav1.css">
<link rel="stylesheet" type="text/css" href="./css/div3.css">
<link rel="stylesheet" type="text/css" href="./css/form1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	
    body {
        background-color: #000;
  		background-image: url("img/background.jpg");
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
				<h1>New Orders</h1>
			</div>
		</div>
		
	<div class="wrapper clearfix">
        <div class="form">
            <form>
                <div class="row">
                    <div class="col-15">
                    <label for="id">ID</label>
                    <input type="text" id="id" name="id">
                    <input type="button" value="Find">
                    </div>
                    <div class="col-15">
                    <label for="name">Name</label>
                    </div>
                    <div class="col-30">
                    <input type="text" id="name" name="name">
                    </div>
                    <div class="col-15">
                    <label for="address">Address</label>
                    </div>
                    <div class="col-30">
                    <input type="text" id="address" name="address">
                    </div>
                </div>
                <div class="row">
                    <div class="table-scroll">
                        <div class="faux-table" aria="hidden"></div>
                            <div class="table-wrap">
                                <table class="main-table">
                                    <tbody>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="1" name="1" value="Item1">
                                                    <label for="1"> Item 1</label>
                                                    <input type="number" id="1" name="1" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="2" name="2" value="Item2">
                                                    <label for="2"> Item 2</label>
                                                    <input type="number" id="2" name="2" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="3" name="3" value="Item3">
                                                    <label for="3"> Item 3</label>
                                                    <input type="number" id="3" name="3" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="4" name="4" value="Item4">
                                                    <label for="4"> Item 4</label>
                                                    <input type="number" id="4" name="4" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="5" name="5" value="Item5">
                                                    <label for="5"> Item 5</label>
                                                    <input type="number" id="5" name="5" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="6" name="6" value="Item6">
                                                    <label for="6"> Item 6</label>
                                                    <input type="number" id="6" name="6" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="7" name="7" value="Item7">
                                                    <label for="7"> Item 7</label>
                                                    <input type="number" id="7" name="7" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="8" name="8" value="Item8">
                                                    <label for="8"> Item 8</label>
                                                    <input type="number" id="8" name="8" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="9" name="9" value="Item9">
                                                    <label for="9"> Item 9</label>
                                                    <input type="number" id="9" name="9" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="10" name="10" value="Item10">
                                                    <label for="10"> Item 10</label>
                                                    <input type="number" id="10" name="10" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="11" name="11" value="Item11">
                                                    <label for="11"> Item 11</label>
                                                    <input type="number" id="11" name="11" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="12" name="12" value="Item12">
                                                    <label for="12"> Item 12</label>
                                                    <input type="number" id="12" name="12" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="13" name="" value="Item13">
                                                    <label for="13"> Item 13</label>
                                                    <input type="number" id="13" name="13" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="14" name="14" value="Item14">
                                                    <label for="14"> Item 14</label>
                                                    <input type="number" id="14" name="14" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="15" name="3" value="Item15">
                                                    <label for="15"> Item 15</label>
                                                    <input type="number" id="15" name="15" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="18" name="18" value="Item18">
                                                    <label for="18"> Item 18</label>
                                                    <input type="number" id="18" name="18" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="19" name="19" value="Item19">
                                                    <label for="19"> Item 19</label>
                                                    <input type="number" id="19" name="19" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="20" name="20" value="Item20">
                                                    <label for="20"> Item 20</label>
                                                    <input type="number" id="20" name="20" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="21" name="21" value="Item21">
                                                    <label for="21"> Item 21</label>
                                                    <input type="number" id="21" name="21" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="22" name="22" value="Item22">
                                                    <label for="22"> Item 22</label>
                                                    <input type="number" id="22" name="22" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="23" name="23" value="Item3">
                                                    <label for="23"> Item 23</label>
                                                    <input type="number" id="23" name="23" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="24" name="24" value="Item24">
                                                    <label for="24"> Item 24</label>
                                                    <input type="number" id="24" name="24" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="25" name="25" value="Item25">
                                                    <label for="25"> Item 25</label>
                                                    <input type="number" id="25" name="25" min="0" max="50" value="0">
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="26" name="26" value="Item3">
                                                    <label for="26"> Item 26</label>
                                                    <input type="number" id="26" name="26" min="0" max="50" value="0">
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-15">
                        <label for="total">Toal Amount</label>
                        </div>
                        <div class="col-30">
                        <input type="text" id="total" name="total">
                        <input type="button" value="Submit">
                        </div>   
                    </div> 
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