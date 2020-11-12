<html>
	<head>
		<title>Dealer_ComplaintPage</title>
		<link rel="stylesheet" type="text/css" href="../css/navh.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerComplaintPage.css">
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
                        <legend>Complaint</legend>
                        <label>Invoice No.: </label>
                        <input type="text" name="name" size="50">
                        
                        <label>Photos (Optional): </label>
                        <input type="file" id="img" name="img" accept="image/*" multiple>
                     
                        <label>Complaint: </label>
                        <textarea name="complaint" placeholder="Enter your complaint here..."></textarea>
                        
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