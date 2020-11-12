<?php require_once('connection.php'); ?>

<html>
	<head>
		<title>Dealer_MomaliItemsPage</title>
		<link rel="stylesheet" type="text/css" href="../css/navh.css">
		<link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerItemsPageh.css">
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
				<?php include '../html/header.html';?>
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
						$sql="SELECT ItemID, ItemName, Price, Image FROM item WHERE Category='Momali'";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_assoc($result)) {
					?>
								<div class="card">
									<img src="data:image/jpg;base64,<?php echo base64_encode( $row["Image"] ); ?>" style="width:100%"/>
									<h3><?php echo $row["ItemName"]; ?></h3>
									<div class="cart">
										<p><?php echo $row["Price"]; ?></p>
										<form method="post">
											<input type='hidden' name='var' value='<?php echo $row["ItemID"];?>'/> 
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
				<?php include '../html/footer.html';?>
			</div>
    	</div>
	</body>
</html>

<?php
    if(isset($_POST['addCart'])){
		$sql="UPDATE cart SET amount = amount+? WHERE ID = ?";
		$result=mysqli_prepare($conn, $sql);
		mysqli_stmt_bind_param($result, "is", $_POST['quantity'], $_POST['var']);
		mysqli_stmt_execute($result);
		mysqli_stmt_close($result);
	}
?>
