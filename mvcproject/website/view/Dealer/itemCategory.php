<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dealer_CategoryPage</title>
		<link rel="stylesheet" href="<?php echo URL; ?>public/css/Common/template.css">
		<link rel="stylesheet" href="<?php echo URL; ?>public/css/Dealer/itemCategory.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
				<div class="cat1">
					<a href="momali"><img src="<?php echo URL; ?>public/img/momali.png" height="200" width=90%></a>
					<p>Momali have received the IS09001 certification for production and sales systems.
					Momali features solid brass construction that have won fame among faucet producers.
					</p>
				</div>
				<div class="cat2">
					<a href="ferroli"><img src="<?php echo URL; ?>public/img/ferroli.png" height="200" width=90%></a>
					<p>Italian boiler manufacturer Ferroli has been at the leading edge of heating appliance 
					design and development and now operates in 14 countries throughout Europe and Asia.
					</p>
				</div>
				<div class="cat3">
					<a href="aquaflex"><img src="<?php echo URL; ?>public/img/aquaflex.png" height="200" width=90%></a>
					<p>Aquaflex thrive to give excellent personal service, quality products, fast delivery lead times at competitive prices.	
					</p>
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