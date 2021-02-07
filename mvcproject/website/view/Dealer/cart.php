<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dealer_CartPage</title>
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Dealer/cart.css">
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
                                foreach($this->data as $values){
					        ?>
                                    <tr>
                                        <td><img src="data:image/jpg;base64,<?php echo base64_encode( $values['details'][0]["Image"] ); ?>" style="width:100%"/></td>
                                        <td><?php echo $values['details'][0]["ItemName"]; ?></td>
                                        <td><?php echo $values['details'][0]["Price"]; ?></td>
                                        <td><input type="number" name="quantity" onChange="displayabc(value, '')" min="0" max="1000" step="50" value="<?php echo $values['amount']; ?>"></td>
                                    </tr>
                            <?php
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
                            <input type="checkbox" id="board" name="board" value="displayboard">
                            <label for="board"> 
                                <span>Display Board Order<span>
                            </label><br>
							<label>
								Total Amount: <input type="text" name="total" size="50" readonly>
							</label>
							<input type="submit" value="Confirm Order"> 
						</fieldset>
                    </form>
                </div>
            </div>
            <div class="footercontent">
                <?php require_once(realpath(dirname(__FILE__) . '/../Common/footer.php'));?>
            </div>
        </div>
    
        <!-- <script type="text/javascript">
			$(document).ready(function(){
				$('.nav_btn').click(function(){
					$('.mobile_nav_items').toggleClass('active');
				});
			});
		</script> -->
    </body>
</html>