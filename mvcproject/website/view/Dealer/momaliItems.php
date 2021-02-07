<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dealer_MomaliItemsPage</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Dealer/items.css">
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
        	<div class="clearfix">
			 	<div class="bar">
				 	<div class="f1">
					 	<a href="momali"><button type="submit" name="momali">Momali</button></a>
						<a href="ferroli"><button type="submit" name="ferroli">Ferroli</button></a>
						<a href="aquaflex"><button type="submit" name="aquaflex">Aquaflex</button></a>
					</div>
					<form class="f2">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
			 	</div>
				<div class="contentIn">
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

		<script type="text/javascript">
			$(document).ready(function(){
				$('.nav_btn').click(function(){
					$('.mobile_nav_items').toggleClass('active');
				});
			});
		</script>
	</body>
</html>

