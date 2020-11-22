<html>
	<head>
		<title>Dealer_MomaliItemsPage</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/headerfooter.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Dealer/items.css">
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
			 	<div class="bar">
					<form>
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
			 	</div>
				<div class="content">
			 		<?php
						if($this->data!=0){
							foreach($this->data as $values){
					?>
								<div class="card">
									<img src="data:image/jpg;base64,<?php echo base64_encode( $values["Image"] ); ?>" style="width:100%"/>
									<h3><?php echo $values["ItemName"]; ?></h3>
									<div class="cart">
										<p><?php echo $values["Price"]; ?></p>
										<form action="addCart" method="post">     <!-- <?php echo URL; ?>Dealer/addCart -->
											<input type='hidden' name='var' value='<?php echo $values["ItemID"];?>'/> 
											<label>Quantity:</label>
											<input type="number" name="quantity" min="0" max="1000" step="50" value="0">
											<button type="submit" name="addCart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button>  
										</form>
									</div>
								</div>	
					<?php   }
						} else { 
							echo "No Items Found";
						}
					?>
				</div>
			</div>
			<div class="footercontent">
				<?php require_once(realpath(dirname(__FILE__) . '/../Common/footer.php'));?>
			</div>
    	</div>
	</body>
</html>

