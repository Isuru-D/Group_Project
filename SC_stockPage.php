<html>
	<head>
		<title>SC_StockPage</title>
		<link rel="stylesheet" type="text/css" href="../css/navh.css">
        <link rel="stylesheet" type="text/css" href="../css/dealerCategoryPage.css">
        <link rel="stylesheet" type="text/css" href="../css/SCStockPage.css">
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
				<div class="left">
					<div class="tab">
						<button>Momali</button>
						<button>Ferroli</button>
						<button>Aquaflex</button>
					</div>
					<div class="content">
						<table>
							<thead>
								<tr>
									<th style="width:20%">Item ID</th>
									<th style="width:60%">Name</th>
									<th style="width:20%">Quantity</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
								<tr>
									<td>xxx</td>
									<td>xxxx xxxx</td>
									<td>xxxx</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
                <div class="right">
					<form>
						<fieldset>
							<label>
								Item ID: <input type="text" name="id" size="50">
							</label>
							<button><i class="fa fa-search" aria-hidden="true"></i> Search</button><br/>
							<label>
								Item Name: <input type="text" name="iname" size="50">
							</label>
							<label>
								Quantity: <input type="text" name="price" size="50">
							</label>
							<input type="reset" value="Cancel">
						</fieldset>
                	</form>
                </div>
            </div>
            <div class="footercontent">
				<?php include '../html/footer.html';?>
            </div>
        </div>
	</body>
</html>