<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Dealers</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Common/template.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Admin/div.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/Admin/split.css">
    <script language="JavaScript" src="<?php echo URL; ?>public/js/ManageDealers.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../css/temp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
      <?php require_once(realpath(dirname(__FILE__) . '/../Common/header.php'));?>
    </header>
      <?php include 'navBar.php';?>
    <div class="content">
      <div class="wrapper clearfix">
        <div class ="topic">
				  <h1>Manage Dealers</h1>
			  </div>
		    </div>
        <div class="wrapper clearfix">
          <div class="right">
            <div class="form">
              <form name="dealerform" action="formAction"  method="POST" onsubmit="checkform()">
                  <table class="a">
                    <tr>
                      <td>
                        <div class="row">
                          <div class="col-25">
                            <label for="id">
                                Dealer_ID: 
                            </label>
                          </div>
                          <div class="col-30">
                              <input type="text" name="id" size="50" value="<?= isset($this->detail[0]['u_id']) ? $this->detail[0]['u_id'] : ''; ?>">
                              <div class="rowbtnsearch">
                                <input type="submit" value="Search" name="search">
                              </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="row">
                          <div class="col-25">
                            <label for="name">
                                Name: 
                            </label>
                          </div>
                          <div class="col-30">
                              <input type="text" name="name" size="50" value="<?= isset($this->detail[0]['f_name']) ? $this->detail[0]['f_name'] : ''; ?>">
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="row">
                          <div class="col-25">
                            <label for="email">
                                Email: 
                            </label>
                          </div>
                          <div class="col-30">
                              <input type="text" name="mail" size="50" value="<?= isset($this->detail[0]['email']) ? $this->detail[0]['email'] : ''; ?>">
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="row">
                          <div class="col-25">
                            <label for="address">
                                Address:
                            </label>
                          </div>
                          <div class="col-30">
                              <input type="text" name="add" size="50" value="<?= isset($this->detail[0]['address']) ? $this->detail[0]['address'] : ''; ?>">
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr colaspan='2'>
                      <td>
                        <div class="row">
                          <div class="col-25">
                            <label for="telephone">Telephone:</label>
                          </div>
                          <div class="col-30">
                              <input type="text" name="tp" size="50" value="<?= isset($this->detail[0]['contact']) ? $this->detail[0]['contact'] : ''; ?>">
                          </div>
                        </div>
                      </td>
                    </tr>
                    </table>
                    <div class="rowbtn">
                        <input type="submit" value="Update" name="update">
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
								    <th> Dealer Id </th>
								    <th> Name </th>
								    <th> Email </th>
								    <th> Address </th>
								    <th> Telephone </th>
							  </tr>
                <tbody>
								<?php
								// echo '<script type="text/javascript">clrRows();</script>';
									if($this->data!=0){
										foreach($this->data as $values){
								?>
												<tr>
													<td><?php echo $values["u_id"]; ?></td>
													<td><?php echo $values["f_name"]; ?></td>
													<td><?php echo $values["email"]; ?></td>
                          <td><?php echo $values["address"]; ?></td>
                          <td><?php echo $values["contact"]; ?></td>
												</tr>
								<?php       }
										} else { 
											echo "Dealers Not Found";
										}
								?>	
							</tbody>
					</table>
				</div>
			</div>
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
				echo '<script> $(window).ready(updateSuccess()); </script>';
			} 

			if(isset($_GET['alert']) && $_GET['alert']=='fail'){
				echo '<script> $(window).ready(updateFail()); </script>';
      }
      
      if(isset($_GET['alert']) && $_GET['alert']=='deletesuccess'){
				echo '<script> $(window).ready(deletedealer()); </script>';
			}
			
			if(isset($_GET['alert']) && $_GET['alert']=='invalid'){
				echo '<script> $(window).ready(invalid()); </script>';
			}
		?>

  </body>
</html>