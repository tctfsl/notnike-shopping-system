<?php
	if (session_status() == PHP_SESSION_NONE) 
	{
		session_start();
	}
	$_SESSION["UserID"] = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>

<title>testing</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="background.css">

<!-- Grid -->
<link rel="stylesheet" type="text/css" href="default.css" />
<link rel="stylesheet" type="text/css" href="component.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
	@media (min-width: 1200px) {
    .container{
        max-width: 80%;
    }
}
</style>
</head>

<body>

<div class = "jumbotron jumbotron-fluid ">
	<div class="container">
		<h1 class="display-4"> Not Nike Store</h1>
		<p class="lead">One stop shop for not nike products</p>
	</div>
</div>
<div class="row-lg">
	<nav class="navbar navbar-expand-lg navbar-light bg-light mt-0 pt-0 noTop noBack">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		<div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="Catalog.php">Home <span class="sr-only">(current)</span></a>
			</li>
		</ul>
		<a class="nav-link" href="Cart.php">Cart</a>	
		<a class="nav-link" href="#">Login</a>
		<a class="nav-link" href="#">Register</a>
		</div>
	</nav>
</div>

<div class="container-fluid" style="display:block">
	<div class="container" style="padding:20px; margin-left:0; margin-bottom: 50px; width:75%; float: left">
		<h1>Shopping Cart</h1>
		<div class="row" style="border-bottom: 1px solid lightgray">
			<div class="col-md-8"></div>
			<div class="col-md-3">Price</div>
			<div class="col-md-1">Quantity</div>
		</div>
		<?php include 'DisplayCartItems.php'; ?>
	
	
</div>

</body>
</html>