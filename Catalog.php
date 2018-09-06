<?php
	if (session_status() == PHP_SESSION_NONE) 
	{
		session_start();
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/bootstrap.min.js"></script>
		
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1">
		<link rel="stylesheet" href="background.css">
		
		<!-- Grid -->
		<link rel="stylesheet" type="text/css" href="default.css" />
		<link rel="stylesheet" type="text/css" href="component.css" />
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
		
		<div class="container">
			<?php include 'DisplayCatalogItems.php'; ?>
		</div>
		

	</body>
</html>