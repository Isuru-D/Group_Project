<html>
	<head>
		<title>SC_NotifyDealersPage</title>
		<link rel="stylesheet" type="text/css" href="../css/navh.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
        <link rel="stylesheet" type="text/css" href="../css/SCNotifyDealerPage.css">
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
                <?php include '../html/SC_header.html';?>
            </div>
            <div class="clearfix">
                <form>
                    <fieldset>
                        <legend>Notify Dealer</legend>
                        <label>Dealer ID.: </label>
                        <input type="text" name="id" size="50">
                        
                        <label>Dealer Name: </label>
                        <input type="text" name="name" size="50">
                        
                        <label>Message: </label>
                        <textarea name="message" placeholder="Enter your message here..."></textarea>
                        
                        <input type="submit" value="Send">
                    </fieldset>
                </form>
            </div>
            <div class="footercontent">
                <?php include '../html/footer.html';?>
            </div>
        </div>
	</body>
</html>