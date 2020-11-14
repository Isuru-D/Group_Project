<html>
	<head>
        
		<title>ACC_PaymentHistoryPage</title>
		<link rel="stylesheet" type="text/css" href="../css/nav.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
        <link rel="stylesheet" type="text/css" href="../css/ACCPaymentHistoryPage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
	 		body {
       			background-color: #000;
  				background-image: url("../img/background.jpg");
  				background-size: cover;
  				background-position: top center;
	 		}
		</style>
	</head>
	<body>
    	<div class="container">
            <div class="header">
                <?php include '../html/ACC_header.html';?>
            </div>
            <h3>Payment History</h3>
            <div class="clearfix">
                <div class="tab">
                    <form method="post">
                        <button type="submit" name="momali">By Date</button>
                        <button type="submit" name="ferroli">By Dealer</button>
                        <button type="submit" name="aquaflex">Paid</button>
                        <button type="submit" name="ferroli">Unpaid</button>
                    </form>
				</div>
				<div class="content">
                    <table>
                        <thead>
                            <tr>
                                <th style="width:15%">Invoice NO.</th>
                                <th style="width:15%">Dealer ID</th>
                                <th style="width:15%">Order NO.</th>
                                <th style="width:20%">Amount</th>
                                <th style="width:20%">Status</th>
                                <th style="width:15%">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td> 
                                <td>xxxx.xx</td>
                                <td>xxxxxxx</td>
                                <td>xx/xx/xx</td>
                            </tr>
                            <tr>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td> 
                                <td>xxxx.xx</td>
                                <td>xxxxxxx</td>
                                <td>xx/xx/xx</td>
                            </tr>
                            <tr>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td> 
                                <td>xxxx.xx</td>
                                <td>xxxxxxx</td>
                                <td>xx/xx/xx</td>
                            </tr>
                            <tr>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td> 
                                <td>xxxx.xx</td>
                                <td>xxxxxxx</td>
                                <td>xx/xx/xx</td>
                            </tr>
                            <tr>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td> 
                                <td>xxxx.xx</td>
                                <td>xxxxxxx</td>
                                <td>xx/xx/xx</td>
                            </tr>
                            <tr>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td> 
                                <td>xxxx.xx</td>
                                <td>xxxxxxx</td>
                                <td>xx/xx/xx</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="footercontent">
                <?php include '../html/footer.html';?>
            </div>
        </div>
	</body>
</html>