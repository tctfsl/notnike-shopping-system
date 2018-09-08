<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/background.css">

    <!-- Grid -->
    <link rel="stylesheet" type="text/css" href="default.css" />
    <link rel="stylesheet" type="text/css" href="component.css" />

    <style>
	    @media (min-width: 1200px) {
        .container{
          max-width: 80%;
        }
      }
    </style>
    
    <!-- Browser tab title -->
    <title>Cart | NotNike</title>
  </head>
  <body>
    <div class = "jumbotron jumbotron-fluid">
	    <div class="container">
		    <h1 class="display-4">Not Nike Store</h1>
		    <p class="lead">One-stop Shop for NotNike Products</p>
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
				      <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
			      </li>
		      </ul>
		      <?php include "DetermineNavBar.php"; ?>
		    </div>
	    </nav>
    </div>

    <div class="container-fluid" style="display:block">
	    <div class="container" style="padding:20px; margin-left:0; margin-bottom: 50px; width:75%; float: left">
		    <h1>Shopping Cart</h1>
		    <div class="row" style="border-bottom: 1px solid lightgray">
			    <div class="col-md-8">Item</div>
			    <div class="col-md-3">Price</div>
		    </div>
		
        <?php include 'DisplayCartItems.php'; ?>
      </div>
    </div>
  </body>
</html>