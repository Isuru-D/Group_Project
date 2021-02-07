<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/div3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/OM/split5.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/Common/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    
  </head>
  <body>
  
  <style>
	 		body {
       			background-color: white;
                background-image: url("<?php echo URL; ?>public/img/homeback.jpg");
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
        <a href="../Login/log" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="orders"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="stockMomali"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="sparePartMomali"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="report"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      <img src=".././public/img/Profile pic.png" class="mobile_profile_image" width="100px" height="100px">
        <h4>Operational Manager</h4>
      </div>
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="orders"><i class="fab fa-shopify"></i><span>Approved Orders</span></a>
        <a href="stockMomali"><i class="fas fa-cubes"></i><span>Stock</span></a>
        <a href="sparePartMomali"><i class="fas fa-tools"></i><span>Spare Parts Stock</span></a>
        <a href="report"><i class="fas fa-tools"></i><span>Reports</span></a>
        <a href="settings"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="clearfix">
      <div class="left">
            <div class="tab">
              <form method="post">
                <a href="stockMomali" target="_self"><input type=button name="momali" value="Momali"></input></a>
                <a href="stockFerroli" target="_self"><input type=button name="ferroli" value="Ferroli"></input></a>
                <a href="stockAqua" target="_self"><input type=button name="aquaflex" value="Aquaflex"></input></a>
              </form>
            </div>
            <div class="content1">
              <table id="table1">
                <thead>
                    <tr>
                      <th> Item ID </th>
                      <th> Name </th>
                      <th> Quantity </th>
                      <th> Unit Price </th>
                      <th> Item Image </th>
                    </tr>
                  </thead>
                  
                  <tbody>	
                    <tr>	
                    <?php

                    if($this->data!=0){
                      foreach($this->data as $values){

                      echo '<tr><td>'.$values["ItemID"].'</td>';	
                      echo '<td>'.$values["ItemName"].'</td>';
                      echo '<td>'.$values["Quantity"].'</td>';
                      echo '<td>'.$values["Price"].'</td>';
                      ?>
                      <td><img src="data:image/jpg;base64,<?php echo base64_encode( $values["Image"] ); ?>" style="width:100px;height:100px"/></td>
                    <?php
                      }
                    }
                    ?>
                    <tr>
                  </tbody>
              </table>
            </div>
      </div>
      
      <div class="right">
      
        <form name="myform" id="myform" action="operationAqua"  method="POST" enctype="multipart/form-data">
          <fieldset>
          <label>
								Item ID: <input type="text" name="id" id="id" size="50" value="<?=isset($this->value[0]['ItemID']) ? $this->value[0]['ItemID'] : '';?>">
              </label>
              <button type="submit" name="search"><i class="fa fa-search" aria-hidden="true"></i> Search</button><br/>
              <label>
								Item Name: <input type="text" name="name" id="name" size="50" value="<?=isset($this->value[0]['ItemName']) ? $this->value[0]['ItemName'] : '';?>">
              </label>
              <label>
								Quantity: <input type="text" name="quantity" id="quantity" size="50" value="<?=isset($this->value[0]['Quantity']) ? $this->value[0]['Quantity'] : '';?>">
              </label>
              <label>
								Unit Price: <input type="text" name="price" id="price" size="50" value="<?=isset($this->value[0]['Price']) ? $this->value[0]['Price'] : '';?>">
              </label>
              <label>
								Item Image: <input type="file" name="image" id="image" size="50" onchange="loadfile(event)">
              </label>
              <div class="preview">
                <img id="file" name ="file" id="file" width="100px" height="100px" value= <img src="data:image/jpg;base64,<?=isset($this->value[0]['Image']) ? base64_encode($this->value[0]['Image']) : '';?>">
                  <script type="text/javascript">
                    function loadfile(event){
                      var output=document.getElementById('file');
                      output.src=URL.createObjectURL(event.target.files[0]);
                    };
                  </script>
              </div> 
              
              <div class="formbtn">
              <input type="submit" value="Add" name="add" onclick = "return validate();"></input>
                <input type="submit" value="Update" name="update" onclick = "return validate();"></input> 
              </div>
              <div class="formbtn">
                <input type="submit" value="Delete" name="delete"> </input>
                <input type="submit" value="Clear" name="clear"></input>
              </div>
             
          </fieldset>
        </form>
            
			</div>
		   
    </div>
  
	
    <div class="footercontent">
      <?php require_once(realpath(dirname(__FILE__) . '/../Common/footer.php'));?>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>
    <script type = "text/javascript">
   <!--
   
      // Form validation code will come here.
      function validate() {
      var form = document.getElementById("myform");
      form.addEventListener('submit', function(event) {
          // Prevent default behaviour
          //event.preventDefault();
          if (
            
            validate()!=false
          ) 
          {
          form.submit();
          }
        });
           
            var itemid=document.getElementById("id").value;  
            var itemName=document.getElementById("name").value;  
            var quantity=document.getElementById("quantity").value; 
            var price=document.getElementById("price").value; 
            var letters = /^[a-z][a-z\s]*$/;
            var isValid = letters.test(document.getElementById("name").value);

        

          
            if (itemid==null || itemid==""){  
              swal({
                icon:"error",
                text: "Item id is required",
                closeOnClickOutside: false,
              }); 
            return false;  
            }
            // else if (isNaN(itemid)){  
            //   document.getElementById("id").innerHTML="Enter Numeric value only"; 
            //   swal({
            //     icon:"error",
            //     text: "ID should be a Numeric value",
            //     closeOnClickOutside: false,
            //   });  
            return false;  
            }else if(itemName==null || itemName==""){ 
              swal({
                icon:"error",
                text: "Item name is required",
                closeOnClickOutside: false,
              });   
            return false;
            }else if(!isValid){ 
              swal({
                icon:"error",
                text: "Item name should only contain letters",
                closeOnClickOutside: false,
              });
            return false;
            }else if(quantity==null || quantity==""){  
              swal({
                icon:"error",
                text: "Quantity is required",
                closeOnClickOutside: false,
              });
            return false;  
            }else if (isNaN(quantity)){  
              document.getElementById("quantity").innerHTML="Enter Numeric value only";
              swal({
                icon:"error",
                text: "Quantity should be a Numeric value",
                closeOnClickOutside: false,
              }); 
            return false;  
            }else if(price==null || price==""){ 
              swal({
                icon:"error",
                text: "Unit price is required",
                closeOnClickOutside: false,
              });  
            return false;  
            }else if (isNaN(price)){  
              document.getElementById("price").innerHTML="Enter Numeric value only"; 
              swal({
                icon:"error",
                text: "Unit price should be a Numeric value",
                closeOnClickOutside: false,
              });  
            return false;  
            }
        }  
        function addSuccess(){
          swal({
              text: "Added Successfully!",
              icon: "success",
            })
        }

        function addFail(){
          swal({
              text: "Adding Failed!",
              icon: "warning",
            })
        }

        function updateSuccess(){
          swal({
              text: "Updated Successfully!",
              icon: "success",
            })
        }

        function updateFail(){
          swal({
              text: "Updating Failed!",
              icon: "warning",
            })
        }

        function deleteSuccess(){
          swal({
              text: "Deleted Successfully!",
              icon: "success",
            })
        }

        function deleteFail(){
          swal({
              text: "Deleting Failed!",
              icon: "warning",
            })
        }
   //-->
</script>
  <?php
  //}
  //if(isset($this->alert)){
    //echo $this->alert;
  if(isset($_GET['alert']) && $_GET['alert']=='success'){
    echo '<script> $(window).ready(addSuccess()); </script>';
  }
  if(isset($_GET['alert']) && $_GET['alert']=='fail'){
    echo '<script> $(window).ready(addFail()); </script>';
  }
  if(isset($_GET['alert']) && $_GET['alert']=='updatesuccess'){
    echo '<script> $(window).ready(updateSuccess()); </script>';
  }
  if(isset($_GET['alert']) && $_GET['alert']=='updatefail'){
    echo '<script> $(window).ready(updateFail()); </script>';
  }
  if(isset($_GET['alert']) && $_GET['alert']=='deletesuccess'){
    echo '<script> $(window).ready(deleteSuccess()); </script>';
  }
  if(isset($_GET['alert']) && $_GET['alert']=='deletefail'){
    echo '<script> $(window).ready(deleteFail()); </script>';
  }
  
  ?>
  </body>
</html>