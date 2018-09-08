<?php
include "UserHasntLoggedIn.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Checkout | NotNike</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/background.css" />

    <!-- Grid -->
    <link rel="stylesheet" type="text/css" href="default.css" />
    <link rel="stylesheet" type="text/css" href="component.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style>
	    @media (min-width: 1200px) {
        .container{
          max-width: 80%;
        }
      }
    </style>
</head>
<body>
  <div class = "jumbotron jumbotron-fluid">
	  <div class="container">
		  <h1 class="display-4">Not Nike Store</h1>
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
				    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
			    </li>
		    </ul>
				<?php include "DetermineNavBar.php"; ?>
		  </div>
	  </nav>
  </div>

  <form method="post" action="PaymentDetails.php">
    <div class="container" style="padding:20px; margin-left:0; margin-bottom: 50px; width:40%; float: left">
		  <h1>Enter Shipping Address</h1>
		  <hr>
		  <div style="float: left; margin-right: 10%">
			  <div><label>Full Name<br>
				  <input type="text" name="receiverName" autofocus required/>
			  </label></div>
			  <div><label>Phone number<br>
				  <input type="number" name="phoneNumber" required/>
			  </label></div>
		  </div>
		  <div style="float: left; margin-right: 10%">
			  <div><label>Address<br>
				  <input type="text" name="address" required/>
			  </label></div>
			  <div><label>State<br>
				  <input type="text" name="state" required/>
			  </label></div>
			  <div><label>City<br>
				  <input type="text" name="city" required/>
			  </label></div>
			  <div><label>Postcode<br>
				  <input type="number" name="postcode" required/>
			  </label></div>
		  </div>
    </div>

    <div class="container" style="padding:20px; margin-left:0; margin-bottom: 50px; width:75%; display: block;">
		  <h1>Payment Information</h1>
		  <hr>
		  <div><label>Card number<br>
			  <input type="text" name="cardNumber" pattern=".{16}" placeholder="Card number" required/>
		  </label></div>
		  <div><label>Name on card<br>
			  <input type="text" name="nameOnCard" placeholder="Cardholder name" required/>
		  </label></div>
		  <div><label>Expiration date<br>
			  <input type="text" name="expDate" pattern="(0[1-9]|1[012])/[0-9]{2}" placeholder="MM/YY" required/>
		  </label></div>
		  <div><label>CVV<br>
			  <input type="text" name="cvv" pattern=".{3}" placeholder="CVV" required/>
		  </label></div>
		  <hr>
		  <?php
			  $totalPrice = $_POST["checkoutTotal"];
			  echo '<span>Total: RM'.$totalPrice.'</span>';
		  ?>
		
		  <input type="submit" class="btn btn-outline-warning" style="color:#3366BB; margin-left: 150px" value="Confirm Purchase">
    </div>
  </form>
</body>
</html>