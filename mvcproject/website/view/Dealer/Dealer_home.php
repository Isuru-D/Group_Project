<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dealer_MomaliItemsPage</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Dealer/Dealerhome.css">
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
			<h1>Trending Items</h1>
        	<div class="contentIn">
			 	<div class="card">
					<img src="<?php echo URL; ?>public/img/a5.jpg" style="width:100%"/>
					<h3>shower</h3>
						<div class="cart">
							<p>Rs.2000.00</p>
							<form>
								<input type='hidden' name='var' value='Item'> 
								<label>Quantity:</label>
								<input type="number" name="quantity" min="0" max="1000" step="50" value="0">
								<button type="submit" name="addCart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button>  
							</form>
						</div>
					</div>	
					<div class="card">
					<img src="<?php echo URL; ?>public/img/a5.jpg" style="width:100%"/>
					<h3>shower</h3>
						<div class="cart">
							<p>Rs.2000.00</p>
							<form>
								<input type='hidden' name='var' value='Item'> 
								<label>Quantity:</label>
								<input type="number" name="quantity" min="0" max="1000" step="50" value="0">
								<button type="submit" name="addCart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button>  
							</form>
						</div>
					</div>	
					<div class="card">
					<img src="<?php echo URL; ?>public/img/a5.jpg" style="width:100%"/>
					<h3>shower</h3>
						<div class="cart">
							<p>Rs.2000.00</p>
							<form>
								<input type='hidden' name='var' value='Item'> 
								<label>Quantity:</label>
								<input type="number" name="quantity" min="0" max="1000" step="50" value="0">
								<button type="submit" name="addCart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button>  
							</form>
						</div>
					</div>	
					<div class="card">
					<img src="<?php echo URL; ?>public/img/a5.jpg" style="width:100%"/>
					<h3>shower</h3>
						<div class="cart">
							<p>Rs.2000.00</p>
							<form>
								<input type='hidden' name='var' value='Item'> 
								<label>Quantity:</label>
								<input type="number" name="quantity" min="0" max="1000" step="50" value="0">
								<button type="submit" name="addCart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button>  
							</form>
						</div>
					</div>	
					<div class="card">
					<img src="<?php echo URL; ?>public/img/a5.jpg" style="width:100%"/>
					<h3>shower</h3>
						<div class="cart">
							<p>Rs.2000.00</p>
							<form>
								<input type='hidden' name='var' value='Item'> 
								<label>Quantity:</label>
								<input type="number" name="quantity" min="0" max="1000" step="50" value="0">
								<button type="submit" name="addCart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button>  
							</form>
						</div>
					</div>	
					<div class="card">
					<img src="<?php echo URL; ?>public/img/a5.jpg" style="width:100%"/>
					<h3>shower</h3>
						<div class="cart">
							<p>Rs.2000.00</p>
							<form>
								<input type='hidden' name='var' value='Item'> 
								<label>Quantity:</label>
								<input type="number" name="quantity" min="0" max="1000" step="50" value="0">
								<button type="submit" name="addCart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button>  
							</form>
						</div>
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

