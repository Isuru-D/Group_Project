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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price List</title>
    <link rel="stylesheet" type="text/css" href="../css/SCPriceListPage.css">
    <link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
    <link rel="stylesheet" href="../css/temp.css">
    <script language="JavaScript" src="../js/SCPriceListPage.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
  <style>
	 		body {
       			background-color: white;
                background-image: url("../img/homeback.jpg");
	 		}
		</style>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>BrandLink <span>Overseas</span></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fa fa-list-ol"></i><span>Price List</span></a>
        <a href="#"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="#"><i class="fas fa-exclamation-circle"></i><span>Complaints</span></a>
        <a href="#"><i class="fa fa-comments"></i><span>Notify Dealers</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src="../img/profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Sales Co-ordinator</h4>
      </div>
        <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fa fa-list-ol"></i><span>Price List</span></a>
        <a href="#"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="#"><i class="fas fa-exclamation-circle"></i><span>Complaints</span></a>
        <a href="#"><i class="fa fa-comments"></i><span>Notify Dealers</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="clearfix">
				<div class="left">
					<div class="tab">
						<form method="post">
							<button type="submit" name="momali">Momali</button>
							<button type="submit" name="ferroli">Ferroli</button>
							<button type="submit" name="aquaflex">Aquaflex</button>
						</form>
					</div>
					<div class="content1">
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
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>