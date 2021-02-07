<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dealer_OrderHistoryPage</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Dealer/orderHistory.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<?php require_once(realpath(dirname(__FILE__) . '/../Common/header.php'));?>
		</header>
        <?php include 'navBar.php';?>
        
    	<div class="content">
            <h3>Order History</h3>
        	<div class="clearfix">
            	<table>
                    <thead>
                        <tr>
                            <th style="width:10%">Order NO.</th>
                            <th style="width:40%">Items</th>
                            <th style="width:15%">Quantity</th>
                            <th style="width:15%">Amount</th>
                            <th style="width:10%">Status</th>
                            <th style="width:10%">Pay now</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2010</td>
                            <td>Basin Tap<br/>Faucet Shower<br/>Embassy Shower Head</td>
                            <td>100<br/>50<br/>150</td>
                            <td>Rs.10 300</td>
                            <td>Pending</td>
                            <td><a href="#"><button class="btn"><i class="fa fa-money" aria-hidden="true"></i> Pay Now</button></a></td>
                        </tr>
                        <tr>
                            <td>1988</td>
                            <td>Deck Mounted Bath Mixer<br/>HBO</td>
                            <td>50<br/>50</td>
                            <td>Rs.15 000</td>
                            <td>Confirmed</td>
                            <td><a href="#"><button class="btn"><i class="fa fa-money" aria-hidden="true"></i> Pay Now</button></a></td>
                        </tr>
                        <tr>
                            <td>1753</td>
                            <td>Conceal Shower Mixer<br/>Bidget Hand Mixer<br/>Single Faucet<br/>Koy Wall Mounted WC</td>
                            <td>100<br/>250<br/>150<br/>20</td>
                            <td>Rs.12 420</td>
                            <td>Pending</td>
                            <td><a href="#"><button class="btn"><i class="fa fa-money" aria-hidden="true"></i> Pay Now</button></a></td>
                        </tr>
                        <tr>
                            <td>1508</td>
                            <td>Aquastore<br/>Verdi-DE<br/>Verdi-SE</td>
                            <td>100<br/>50<br/>50</td>
                            <td>Rs.19 700</td>
                            <td>Delivered</td>
                            <td><a href="#"><button class="btn"><i class="fa fa-money" aria-hidden="true"></i> Pay Now</button></a></td>
                        </tr>
                        <tr>
                            <td>1443</td>
                            <td>Concealed 2 Way Diverter<br/>Freestanding Bathtub<br/>Wall Mounted Tumbler</td>
                            <td>300<br/>50<br/>50</td>
                            <td>Rs.15 700</td>
                            <td>Delivered</td>
                            <td><a href="#"><button class="btn"><i class="fa fa-money" aria-hidden="true"></i> Pay Now</button></a></td>
                        </tr>
                        <tr>
                            <td>1321</td>
                            <td>Single Faucet<br/>Double Handle Bath Mixer<br/>Bidet Hand Mixer<br/>Bip Tap</td>
                            <td>100<br/>350<br/>250</td>
                            <td>Rs.8 750</td>
                            <td>Delivered</td>
                            <td><a href="#"><button class="btn"><i class="fa fa-money" aria-hidden="true"></i> Pay Now</button></a></td>
                        </tr>
                        <tr>
                            <td>1311</td>
                            <td>Shower Head<br/>Single Handle Mixer<br/>Koy Wall Mounted WC</td>
                            <td>100<br/>150<br/>20</td>
                            <td>Rs.18 000</td>
                            <td>Delivered</td>
                            <td><a href="#"><button class="btn"><i class="fa fa-money" aria-hidden="true"></i> Pay Now</button></a></td>
                        </tr>
                        <tr>
                            <td>1234</td>
                            <td>Wall Mounted Soap Basket<br/>Wall Mounted Tumbler</td>
                            <td>100<br/>50</td>
                            <td>-</td>
                            <td>Rejected</td>
                            <td><a href="#"><button class="btn"><i class="fa fa-money" aria-hidden="true"></i> Pay Now</button></a></td>
                        </tr>
                    </tbody>
                </table>
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