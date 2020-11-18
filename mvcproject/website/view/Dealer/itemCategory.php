<html>
	<head>
		<title>Dealer_CategoryPage</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/headerfooter.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Dealer/itemCategory.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
	 		body {
       			background-color: #000;
  				background-image: url("<?php echo URL; ?>public/img/background.jpg");
  				background-size: cover;
  				background-position: top center;
	 		}
		</style>
	</head>
	<body>
    	<div class="container">
        	<div class="header">
				<?php include 'header.php';?>
        	</div>
        	<div class="clearfix">
            	<div class="cat1">
					<a href="dealer_momaliItemsPage.php"><img src="<?php echo URL; ?>public/img/momali.png" height="200" width=90%></a>
					<p>Momali have received the IS09001 certification for production and sales systems.
					Momali features solid brass construction that have won fame among faucet producers.
					</p>
				</div>
            	<div class="cat2">
					<a href="dealer_ferroliItemsPage.php"><img src="<?php echo URL; ?>public/img/ferroli.png" height="200" width=90%></a>
					<p>Italian boiler manufacturer Ferroli has been at the leading edge of heating appliance 
					design and development and now operates in 14 countries throughout Europe and Asia.
					</p>
				</div>
				<div class="cat3">
					<a href="dealer_aquaflexItemsPage.php"><img src="<?php echo URL; ?>public/img/aquaflex.png" height="200" width=90%></a>
					<p>Aquaflex thrive to give excellent personal service, quality products, fast delivery lead times at competitive prices.	
					</p>
           		</div>
			</div>
			<div class="footercontent">
				<?php require_once(realpath(dirname(__FILE__) . '/../Common/footer.php'));?>
			</div>
    	</div>
	</body>
</html>