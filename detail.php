<!DOCTYPE html>
<html>
<head>
	<title>Toy Detail</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
		<div id="menu_top">
			<div id="ATN">
				<a href="index.php" title="MAIN PAGE">SHOP TOY ATN</a>
			</div>
			<div id="menu">
				<ul>
				<li><a href="index.php" title="MAIN PAGE">MAIN PAGE</a></li>
				<li><a href="introduce.php" title="INTRODUCE">INTRODUCE</a></li>
				<li><a href="product.php" title="PRODUCT">PRODUCT</a></li>
				
				<li><a href="contact.html" title="CONTACT">CONTACT</a></li>	
			</ul>
			</div>
			<div id="help">
				<a href="help.php" title="HELP">HELP</a>
			</div>
		</div>
		<div id="banner">
			<img src="image/Main11.png" alt="DO CHOI" width="1000px" />
		</div>'/=ơ'
		<div id="detail">
<?php
		include 'dbconnector.php';
		$productid =$_GET['productid'];
		            $sql = "SELECT productid, image, price, productname FROM product  WHERE productid = '$productid'";
		            $result = pg_query($connection,$sql);
		            if (pg_num_rows($result) > 0) {
		            // output data of each row
		            while($row = pg_fetch_assoc($result)) {
		            	$productid = $row['productid'];
		              	$price = $row['price'];
		              	$image = $row['image'];
		              	$productname = $row['productname'];
		         
		          ?>
			

			<h1>Do choi 1</h1>
				<div class="detailIMG col-5">
					<img src="<?= $image; ?>" width="300px" height="400px" />
				</div>
				<div class="col-5 detail">
					<form>
						<table>
							<tr>
								<th>Name: </th>
								<td><?= $productname; ?></td>
							</tr>
							<tr>
								<th>Price: </th>
								<td><?= $price; ?>$</td>
							</tr>
							<tr>
								<th>Color:</th>
								<td>
									<input type="radio" name="color"/>Red
									<input type="radio" name="color"/>White
								</td>
							</tr>
							<tr>
								<th>Number: </th>
								<td><select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select></td>
							</tr>
						</table>
					</form>
				</div>
				 <?php }} 

		       ?>

		</div>
		<div id="footer">
			<div class="row">
				<p>Welcome To Toy Shop</p>
			</div>
		</div>
</body>
</html>