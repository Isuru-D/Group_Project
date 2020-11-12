<html>
	<head>
		<title>Dealer_DisplayBoardOrderPage</title>
		<link rel="stylesheet" type="text/css" href="../css/navh.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerDisplayBoardOrderPage.css">
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
                <div class="images">
                    <img src="../img/db1.jpg" height="180px" width=20%>
                    <img src="../img/db2.jpg" height="180px" width=20%>
                    <img src="../img/db3.jpg" height="180px" width=20%>
                </div> 
                <form>
                    <fieldset>
						<label>Name: </label>
						<input type="text" name="name" size="50"><br />
                        
						<label>Address: </label>
						<input type="text" name="address" size="50">
                        
                        <input type="submit" value="Confirm Order"> 
                    </fieldset>
                </form>
			</div>
			<div class="footercontent">
				<?php include '../html/footer.html';?>
			</div>
    	</div>
	</body>
</html>