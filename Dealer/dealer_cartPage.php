<?php require_once('../connect.php'); ?>

<!-- <?php
		// if(isset($_POST)){
		// 	$sql3="UPDATE cart SET amount = '".$_POST['val1']."' WHERE ID = '".$_POST['val2']."'";
		// 	$result3 = mysqli_query($conn, $sql3);
		// 	if(mysqli_affected_rows($conn)>0){
		// 		echo 'alert("Updated Successfully")';
		// 	}else{
		// 		echo 'alert("Error")';
		// 	}
		// 	mysqli_close($conn);
		// }
?> -->

<html>
	<head>
		<title>Dealer_CartPage</title>
		<link rel="stylesheet" type="text/css" href="../css/navh.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerCartPage.css">
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
				<div class="column">
					<p>Shopping Cart</p>
					<table>
						<thead>
							<tr>
								<th style="width:25%">Iamge</th>
								<th style="width:35%">Name</th>
								<th style="width:20%">Price</th>
								<th style="width:20%">Quantity</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql="SELECT * FROM cart WHERE amount>0";
								$result = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result) > 0){
									while($row = mysqli_fetch_assoc($result)) {
										$id=$row["ID"];
										$sql2="SELECT ItemName, Price, Image FROM item WHERE ItemID='$id'";
										$result2 = mysqli_query($connection, $sql2);
										$row2 = mysqli_fetch_assoc($result2);
							?>			
										<tr>
											<td><img src="data:image/jpg;base64,<?php echo base64_encode( $row2["Image"] ); ?>" style="width:100%"/></td>
											<td><?php echo $row2["ItemName"]; ?></td>
											<td><?php echo $row2["Price"]; ?></td>
											<td><input type="number" name="quantity" onChange="displayabc(value, '<?php echo $id; ?>')" min="0" max="1000" step="50" value="<?php echo $row["amount"]; ?>"></td>
										</tr>
							<?php   }
								} else { 
									echo "Cart is empty";
								}
							?>
						</tbody>
					</table>
				</div>
				<div class="column">
					<p>Order Details</p>
					<form>
						<fieldset>
							<label>
								Name: <input type="text" name="name" size="50">
							</label>
							<label>
								Address: <input type="text" name="address" size="50">
							</label>
							<label>
								Total Amount: <input type="text" name="total" size="50" readonly>
							</label>
							<input type="submit" value="Confirm Order"> 
						</fieldset>
                	</form>
				</div>
			</div>
			<div class="footercontent">
				<?php include '../html/footer.html';?>
			</div>
    	</div>
	</body>
</html>

<!-- <script>
	function displayabc(val1, val2) {
		try{
			const response=await fetch('http://localhost/temp/php/dealer_cartPage.php',{
				method:'post',
				body:JSON.stringify(data)
			});
			let data={
				"val1":val1,
				"val2":val2,
			}
		}
	}
</script> -->