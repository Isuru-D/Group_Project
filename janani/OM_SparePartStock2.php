<?php require_once('connect.php'); ?>

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

			$sql = "INSERT INTO `spareparts_stock` (`itemNO`, `name`, `quantity`, `unitPrice`, `photo`, `category`) VALUES ('$item', '$name', '$quantity', '$price', '".$img."', 'ferroli')";

			

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
    $query = "SELECT * FROM `spareparts_stock` WHERE `itemNo` = $id && `category`='ferroli' LIMIT 1";
    
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
        $sqly = "UPDATE spareparts_stock SET name = '".$_POST['itemName']."',itemNo = '".$_POST['itemid']."',quantity = '".$_POST['quantity']."',unitPrice = '".$_POST['price']."', photo='$image' WHERE itemNo ='".$_POST['itemid']."' && category='ferroli'";
        $resulty = mysqli_query($connection,$sqly);
    } else{
        $sqly = "UPDATE spareparts_stock SET name = '".$_POST['itemName']."',itemNo = '".$_POST['itemid']."',quantity = '".$_POST['quantity']."',unitPrice = '".$_POST['price']."' WHERE itemNo ='".$_POST['itemid']."' && category='ferroli'";
        $resulty = mysqli_query($connection,$sqly);   
    }
  
    $sqlz = "SELECT * FROM spareparts_stock WHERE itemNo =".$_POST['itemid']." && category ='ferroli'";
    $resultz = mysqli_query($connection,$sqlz);
    $row=mysqli_fetch_assoc($resultz);
    echo"<script> alert('Updated Sucessfully') </script>";
    $image="";
  }


?>
<?php
if(isset($_POST['delete'])){
    
    
    $id = $_POST['itemid'];
    $sqly2 = "DELETE FROM `spareparts_stock` WHERE `itemNo` = $id && `category`='ferroli'";
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


<html>
<head>
<title>OM Spare part Stock</title>
<link rel="stylesheet" type="text/css" href="./css/nav1.css">
<link rel="stylesheet" type="text/css" href="./css/div3.css">
<link rel="stylesheet" type="text/css" href="./css/split5.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  		background-image: url("img/background.jpg");
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

</head>

<body>
    <div class="container">
        <div class="header">
		<div class="navbar">
			
                    <a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
  					<a href="OM_ApprovedOrders.php"><i class="fa fa-check-square" aria-hidden="true"></i>Approved Orders</a>
					<a href="OM_Stock.php"><i class="fa fa-houzz" aria-hidden="true"></i>Stock</a>
					<a href="OM_SparePartStock.php"><i class="fa fa-cog" aria-hidden="true"></i>Spare Part Stock</a>  
					<a href="OM_ReportGeneration.php"><i class="fa fa-file" aria-hidden="true"></i>Reports</a>   
					<a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
		</div>
		
        <div class="wrapper clearfix">
            <div class ="header">
				<h1>Spare Part Stock</h1>
			</div>
		</div>
      
        <a href="OM_SparePartStock.php"><input type="button" value="Momali"></a>
        <a href="OM_SparePartStock2.php" target="_self"><input type="button" value="Ferroli"></a>
		<a href="OM_SparePartStock3.php" target="_self"><input type="button" value="Aquaflex"></a>
		
        <div class="wrapper clearfix">
            
            <div class="right">
                <div class="form">
					<form name="myform" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="POST" enctype="multipart/form-data" >	
                    <table class="a">
                        
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-25">
                                    <label for="id">Item ID</label>
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
                                    <label for="name">Item Name</label>
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
								<th> Photo </th>
								<th> Unit Price </th>
								<th> Quantity </th>
							</tr>

								<?php
								$sql = "SELECT * FROM spareparts_stock WHERE category='ferroli'";
								mysqli_query($connection, $sql);
								$result1 = mysqli_query($connection,$sql);

								while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
									echo '<tr><td>'.$row["itemNo"].'</td>';	
									echo '<td>'.$row["name"].'</td>';
									echo '<td>'.$row["quantity"].'</td>';
									echo '<td>'.$row["unitPrice"].'</td>';
									echo '<td><img src='.$row["photo"].' style="width:100px;height:100px;"/></td></tr>';
								
								}
								?>
					</table>
				</div>
			</div>
            </div>

        </div>
		
		
		

		<div class="wrapper clearfix">
		<div class="footercontent">
        	<div class="logo">
				<img src="img/logo.png" height =100px width=320px>
			</div>
			<div class="footer">
					<h3>copyright &copy; BrandlinkOverseas.lk</h3>
					<a href="https://www.facebook.com"><img src="img/fb.png" width=40px height=40px></a>
					<a href="https://www.instagram.com/?hl=en"><img src="img/insta.png" width=60px height=40px></a>
					<a href="https://twitter.com/"><img src="img/twitter.png" width=40px height=40px></a>
			</div>
		</div>
		</div>
	</div>
	
</body>
</html>