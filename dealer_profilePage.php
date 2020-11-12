<html>
	<head>
		<title>Dealer_ProfilePage</title>
		<link rel="stylesheet" type="text/css" href="../css/navh.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerProfilePage.css">
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
                <form>
                    <fieldset>
                        <legend>Profile</legend>
                        <label>Name: </label>
                        <input type="text" name="name" size="50"><br />
                        
                        <label>Address: </label>
                        <input type="text" name="address" size="50">
                        
                        <label>Email: </label>
                        <input type="email" name="mail" size="50">
                        
                        <label>Telephone: </label>
                        <input type="tel" name="telephone" size="50">
                     
                        <input type="submit" value="Save Changes">
                    </fieldset>
                    <input type="submit" value="Delete My Account">
                </form>
            </div>
            <div class="footercontent">
                <?php include '../html/footer.html';?>
            </div>
        </div>
	</body>
</html>