<?php require_once('../connect.php'); ?>

<!--add items to db-->	
<?php
		if(isset($_POST['add'])) {
			
			$item = filter_input(INPUT_POST, 'itemid');
			$name = filter_input(INPUT_POST, 'itemName');
			$quantity = filter_input(INPUT_POST, 'quantity');
			$price = filter_input(INPUT_POST, 'price');

			$photoTmpPath = $_FILES['image']['tmp_name'];
			$data = file_get_contents($photoTmpPath);
			$img = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);

			$sql = "INSERT INTO `stock` (`itemNO`, `name`, `quantity`, `unitPrice`, `photo`, `category`) VALUES ('$item', '$name', '$quantity', '$price', '".$img."', 'aquaflex')";

			

			$result = mysqli_query($connection,$sql);
			
			if($result){
				echo "<script> alert(' ADDED SUCESSFULLY')</script>";
			}
			else{
				echo "<script> alert(' ADDING FAILED')</script>";
			}
				
			
	}
?>

<?php
if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['itemid'];
    
  
    
    // mysql search query
    $query = "SELECT * FROM `stock` WHERE `itemNo` = $id && `category`='aquaflex' LIMIT 1";
    
    $result6 = mysqli_query($connection, $query);
    
    // if id exist 
    // show data in inputs
	if(mysqli_num_rows($result6) > 0)
    {
      while ($row = mysqli_fetch_array($result6))
      {
		$id = $row['itemNo'];  
        $name = $row['name'];
        $quantity = $row['quantity'];
		$price = $row['unitPrice'];
		$image = ($row['photo']);
		
		
      }  
    }
    
     //if the id not exist
     //show a message and clear inputs
    else {
		echo "Undifined ID";
			$id = "";
            $name = "";
            $quantity = "";
			$price = "";
			$image = "";
    }
    
    
    
    
}
else{

	$id = "";
    $name = "";
    $quantity = "";
	$price = "";
	$image = "";
}

?>

<?php  
if(isset($_POST['update'])){
    $photoTmpPath = $_FILES['image']['tmp_name'];
	
    
    if($photoTmpPath != ""){
        $data = file_get_contents($photoTmpPath);
        $image = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);
        $sqly = "UPDATE stock SET name = '".$_POST['itemName']."',itemNo = '".$_POST['itemid']."',quantity = '".$_POST['quantity']."',unitPrice = '".$_POST['price']."', photo='$image' WHERE itemNo ='".$_POST['itemid']."' && category='aquaflex'";
        $resulty = mysqli_query($connection,$sqly);
    } else{
        $sqly = "UPDATE stock SET name = '".$_POST['itemName']."',itemNo = '".$_POST['itemid']."',quantity = '".$_POST['quantity']."',unitPrice = '".$_POST['price']."' WHERE itemNo ='".$_POST['itemid']."' && category='aquaflex'";
        $resulty = mysqli_query($connection,$sqly);   
    }
  
    $sqlz = "SELECT * FROM stock WHERE itemNo =".$_POST['itemid']." && category ='aquaflex'";
    $resultz = mysqli_query($connection,$sqlz);
    $row=mysqli_fetch_assoc($resultz);
    echo"<script> alert('Updated Sucessfully') </script>";
    $image="";
  }


?>
<?php
if(isset($_POST['delete'])){
  $id = $_POST['itemid'];
  $sqly2 = "DELETE FROM `stock` WHERE `itemNo` = $id && `category`='aquaflex'";
  $resulty2 = mysqli_query($connection,$sqly2);
  
  
   if($resulty2){
	  echo"<script> alert('Deleted Sucessfully') </script>";
	  $id = "";
    
   }
   else{
	  echo"<script> alert('Deleted Failed') </script>"; 
   }
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="stylesheet" type="text/css" href="../css/div3.css">
    <link rel="stylesheet" type="text/css" href="../css/split5.css">
    <link rel="stylesheet" href="../css/temp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
  <script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
      
         
            var itemid=document.myform.itemid.value;  
            var itemName=document.myform.itemName.value;  
            var quantity=document.myform.quantity.value; 
            var price=document.myform.price.value; 
            var letters = /^[A-Za-z]+$/;
            var isValid = letters.test(document.getElementById("name").value);

            if (itemid==null || itemid==""){  
            alert("Item id is required.");  
            return false;  
            }else if (isNaN(itemid)){  
            document.getElementById("id").innerHTML="Enter Numeric value only";  
            alert("ID should be a Numeric value");
            return false;  
            }else if(itemName==null || itemName==""){  
            alert("Item name is required.");  
            return false;
            }else if(!isValid){ 
            alert("Item name should only contain letters.");
            return false;
            }else if(quantity==null || quantity==""){  
            alert("Quantity is required.");  
            return false;  
            }else if (isNaN(quantity)){  
            document.getElementById("quantity").innerHTML="Enter Numeric value only";  
            alert("Quantity should be a Numeric value");
            return false;  
            }else if(price==null || price==""){  
            alert("Unit price is required.");  
            return false;  
            }else if (isNaN(price)){  
            document.getElementById("price").innerHTML="Enter Numeric value only";  
            alert("Unit price should be a Numeric value");
            return false;  
            }
        }  
   //-->
</script>

<style>
	
    body {
        background-color: #000;
  		background-image: url("../img/homeback.jpg");
  		background-size: cover;
  		background-position: top center;
      }
      .error {color: #FF0000;}  

    .preview{
    width:100px;
    height:100px;
    border:2px solid #dddddd;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #cccccc;
    float: right;
    }
    table.a {
    table-layout: auto;
    width: 100%;
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
        <a href="#"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="#"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="#"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="#"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src="../img/profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Operational Manager</h4>
      </div>
        <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="#"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="#"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="#"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

  <div class="content">
  <div class="wrapper clearfix">
      <div class ="topic">
				<h1>Stock</h1>
			</div>
		</div>
      
        <a href="OM_Stock.php"><input type="button" value="Momali"></a>
        <a href="OM_Stock2.php" target="_self"><input type="button" value="Ferroli"></a>
        <a href="OM_Stock3.php" target="_self"><input type="button" value="Aquaflex"></a>

        <div class="wrapper clearfix">
            
            <div class="right">
                <div class="form">
                    <form name="myform" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="POST" enctype="multipart/form-data" >
                    <table class="a">
                        
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-25">
                                    <label for="id">Item_ID</label>
                                    </div>
                                    <div class="col-30">
                                    <input type="text" id="id" name="itemid" value="<?php echo $id;?>" >
                                    <span id="id"></span>
                                    </div>
                                </div>
                            </td>
                            <td rowspan='4'>
                                <div class="preview">
                                    <img id="file" name ="file" width="100px" height="100px" value= <img src="<?php echo $image;?>">
                                    <script type="text/javascript">
                                        function loadfile(event){
                                            
                                            var output=document.getElementById('file');
                                            output.src=URL.createObjectURL(event.target.files[0]);
                                            
                                        };
                                    </script>
                                </div>    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-25">
                                    <label for="name">Item_Name</label>
                                    </div>
                                    <div class="col-30">
                                    <input type="text" id="name" name="itemName"  value="<?php echo $name;?>" >
                                    <span id="name"></span>
                                    </div>
                                    
                                </div>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                <div class="row">
                                    <div class="col-25">
                                    <label for="quantity">Quantity</label>
                                    </div>
                                    <div class="col-30">
                                    <input type="text" id="quantity" name="quantity"  value="<?php echo $quantity;?>">
                                    <span id="quantity"></span>
                                    </div>
                                </div>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                <div class="row">
                                    <div class="col-25">
                                    <label for="price">Price</label>
                                    </div>
                                    <div class="col-30">
                                    <input type="text" id="price" name="price"  value="<?php echo $price;?>" >
                                    <span id="price"></span>
                                    </div>
                                </div>
                                </td>
                        </tr>
                        <tr colaspan='2'>
                                <td>
                                <div class="row">
                                    <div class="col-25">
                                    <label for="image">Image</label>
                                    </div>
                                    <div class="col-30">
                                    <input type="file" name="image" id="image" onchange="loadfile(event)">
                                    
                                    </div>
                                </div>
                                </td>
                        </tr>
                        </table>

                        <div class="row">
                        <input type="submit" value="Search" name="search">
                        <input type="submit" value="Add" name="add" onclick = "return(validate());">
                        <input type="submit" value="Update" name="update" onclick = "return(validate());">
                        <input type="submit" value="Delete" name="delete">
                        </div>
                    </form>
                </div>
			</div>
		   
            
            <div class="left">
            <div class="table-scroll">
  			<div class="faux-table" aria="hidden"></div>
  				<div class="table-wrap">
    				<table class="main-table">
     					
        					<tr>
								<th> Item_no </th>
								<th> Name </th>
								<th> Quantity </th>
								<th> Unit Price </th>
								<th> Item Image </th>
								</tr>
							
							
								<?php
								$sql = "SELECT * FROM stock WHERE category='aquaflex'";
								mysqli_query($connection, $sql);
								$result1 = mysqli_query($connection,$sql);

								while($row=mysqli_fetch_array($result1)){
									?>	
									
									<tr>
									<td><?php echo $row['itemNo'] ?></td>
									<td><?php echo $row['name'] ?></td>
									<td><?php echo $row['quantity'] ?></td>
									<td><?php echo $row['unitPrice'] ?></td>
									<td><img src='<?php echo $row['photo']; ?>'  width="100" height="100" /></td>
									</tr>
								<?php
								}
								?>
							
							
						
					</table>
				</div>
			</div>
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