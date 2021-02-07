<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Price_ListPage</title>
		<link rel="stylesheet" href="<?php echo URL; ?>public/css/Common/template.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/SC/priceList.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/alert.css">
		<script language="JavaScript" src="<?php echo URL; ?>public/js/priceList.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
				<div class="left">
					<div class="tab">
						<form action="priceList" method="post">
							<button type="submit" name="momali">Momali</button>
							<button type="submit" name="ferroli">Ferroli</button>
							<button type="submit" name="aquaflex">Aquaflex</button>
						</form>
					</div>
					<div class="contentIn">
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
									if($this->data!=0){
										foreach($this->data as $values){
								?>
											<tr>
												<td><?php echo $values["ItemID"]; ?></td>
												<td><?php echo $values["ItemName"]; ?></td>
												<td><?php echo $values["Price"]; ?></td>
											</tr>
								<?php   }
									} else { 
										echo "No Items Found";
									}
								?>	
							</tbody>
						</table>
					</div>
				</div>
                <div class="right">
					<fieldset>
						<form action="itemDetails" method="post">
							<label>
								Item ID: <input type="text" id="id" name="id" size="50" value="<?= isset($this->detail[0]['ItemID']) ? $this->detail[0]['ItemID'] : ''; ?>">
							</label>
							<button type="submit" name="searchP"><i class="fa fa-search" aria-hidden="true"></i> Search</button><br/>
						</form>
						<form action="formAction" id="priceForm" name="priceform" method="post">
							<input type='hidden' name='id' value='<?= isset($this->detail[0]['ItemID']) ? $this->detail[0]['ItemID'] : ''; ?>'/> 
							<label>
								Item Name: <input type="text" id="name" name="iname" size="50" value="<?=isset($this->detail[0]['ItemName']) ? $this->detail[0]['ItemName'] : ''; ?>" readonly>
							</label>
							<label>
								Price: <input type="text" id="price" name="price" size="50" value="<?= isset($this->detail[0]['Price']) ? $this->detail[0]['Price'] : ''; ?>" required>
							</label>
							<div class="formbtn">
								<span class="rstbtn" onclick="resetform()">Cancel</span>
								<input type="submit" value="Update" name="update" onclick="checkform()"> 
							</div>
						</form>
					</fieldset>		
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

		<?php 
			if(isset($_GET['alert']) && $_GET['alert']=='success'){
				echo '<script> $(window).ready(priceSuccess()); </script>';
			} 

			if(isset($_GET['alert']) && $_GET['alert']=='fail'){
				echo '<script> $(window).ready(priceFail()); </script>';
			}
			
			if(isset($_GET['alert']) && $_GET['alert']=='invalid'){
				echo '<script> $(window).ready(invalid()); </script>';
			}
		?>
  	</body>
</html>