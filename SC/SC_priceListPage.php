<?php require_once('../connect.php'); ?>

<?php
	$id="";
	$name="";
	$price="";
		if(isset($_POST['search'])){
			$id=$_POST['id'];
			$sql1="SELECT ItemName, Price FROM item WHERE ItemID='".$_POST['id']."'";
			$result1 = mysqli_query($connection, $sql1);
			if (mysqli_num_rows($result1) > 0){
				while($row1 = mysqli_fetch_assoc($result1)) {
					$name=$row1["ItemName"];
					$price=$row1["Price"];
				}
			} else { 
				echo "<script>alert('No Item Found');</script>";
			}
		}

		if(isset($_POST['reset'])){
			$id="";
			$name="";
			$price="";
		}

		if(isset($_POST['update'])){
			$sql="UPDATE item SET Price = ? WHERE ItemID = ?";
			$result=mysqli_prepare($connection, $sql);
			mysqli_stmt_bind_param($result, "ds", $_POST['price'], $_POST['id']);
			mysqli_stmt_execute($result);
			if(mysqli_affected_rows($connection)>0){
				echo "<script>alert('Updated Successfully');</script>";
			}else{
				echo "<script>alert('Error');</script>";
			}
			mysqli_stmt_close($result);
		}
?>

<html>
	<head>
		<title>SC_PriceListPage</title>
		<link rel="stylesheet" type="text/css" href="../css/navh.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
        <link rel="stylesheet" type="text/css" href="../css/SCPriceListPage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script language="JavaScript" src="../js/SCPriceListPage.js"></script>
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
				<?php include '../html/SC_header.html';?>
            </div>
            <div class="clearfix">
				<div class="left">
					<div class="tab">
						<form method="post">
							<button type="submit" name="momali">Momali</button>
							<button type="submit" name="ferroli">Ferroli</button>
							<button type="submit" name="aquaflex">Aquaflex</button>
						</form>
					</div>
					<div class="content">
						<table id="table1">
							<thead>
								<tr>
									<th style="width:20%">Item ID</th>
									<th style="width:60%">Name</th>
									<th style="width:20%">Price</th>
								</tr>
							</thead>
							<tbody>

								<?php 
										$sql="SELECT ItemID, ItemName, Price FROM item WHERE Category='Momali'";
										$result=mysqli_query($connection, $sql);
										if (mysqli_num_rows($result) > 0){
											while($row = mysqli_fetch_assoc($result)) {
								?>
												<tr>
													<td><?php echo $row["ItemID"]; ?></td>
													<td><?php echo $row["ItemName"]; ?></td>
													<td><?php echo $row["Price"]; ?></td>
												</tr>
								<?php       }
										} else { 
											echo "No Items Found";
										}
								?>

								<?php 
									if(isset($_POST['momali'])){
										echo '<script type="text/javascript">clrRows();</script>';
										$sql="SELECT ItemID, ItemName, Price FROM item WHERE Category='Momali'";
										$result=mysqli_query($connection, $sql);
										if (mysqli_num_rows($result) > 0){
											while($row = mysqli_fetch_assoc($result)) {
								?>
												<tr>
													<td><?php echo $row["ItemID"]; ?></td>
													<td><?php echo $row["ItemName"]; ?></td>
													<td><?php echo $row["Price"]; ?></td>
												</tr>
								<?php       }
										} else { 
											echo "No Items Found";
										}
									}	
								?>

								<?php 
									if(isset($_POST['ferroli'])){
										echo '<script type="text/javascript">clrRows();</script>';
										$sql="SELECT ItemID, ItemName, Price FROM item WHERE Category='Ferroli'";
										$result=mysqli_query($connection, $sql);
										if (mysqli_num_rows($result) > 0){
											while($row = mysqli_fetch_assoc($result)) {
								?>
												<tr>
													<td><?php echo $row["ItemID"]; ?></td>
													<td><?php echo $row["ItemName"]; ?></td>
													<td><?php echo $row["Price"]; ?></td>
												</tr>
								<?php       }
										} else { 
											echo "No Items Found";
										}
									}	
								?>

								<?php 
									if(isset($_POST['aquaflex'])){
										echo '<script type="text/javascript">clrRows();</script>';
										$sql="SELECT ItemID, ItemName, Price FROM item WHERE Category='Aquaflex'";
										$result=mysqli_query($connection, $sql);
										if (mysqli_num_rows($result) > 0){
											while($row = mysqli_fetch_assoc($result)) {
								?>
												<tr>
													<td><?php echo $row["ItemID"]; ?></td>
													<td><?php echo $row["ItemName"]; ?></td>
													<td><?php echo $row["Price"]; ?></td>
												</tr>
								<?php       }
										} else { 
											echo "No Items Found";
										}
									}	
								?>
							</tbody>
						</table>
					</div>
				</div>
                <div class="right">
					<form method="post">
						<fieldset>
							<label>
								Item ID: <input type="text" name="id" size="50" value="<?php echo $id; ?>">
							</label>
							<button type="submit" name="search"><i class="fa fa-search" aria-hidden="true"></i> Search</button><br/>
							</form>
							<form name="priceform" method="post" onsubmit="return checkform()">
							<input type='hidden' name='id' value='<?php echo $id;?>'/> 
							<label>
								Item Name: <input type="text" name="iname" size="50" value="<?php echo $name; ?>" readonly>
							</label>
							<label>
								Price: <input type="text" name="price" size="50" value="<?php echo $price; ?>">
							</label>
							<div class="formbtn">
								<button type="submit" name="reset">Cancel</button>
								<input type="submit" value="Update" name="update"> 
							</div>
							</form>
						</fieldset>	
					
                </div>
            </div>
            <div class="footercontent">
				<?php include '../html/footer.html';?>
            </div>
        </div>
	</body>
</html>



						