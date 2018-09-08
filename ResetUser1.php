<?php
//Verify if user has logged in
//If true, redirect user to the main page
//If false, let user proceed with the current page
include "UserHasLoggedIn.php";
?>
<!DOCTYPE html>
<html lang = "en">
  <head>
    <!-- Required meta tags come first -->
    <meta charset = "utf-8">
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
    
    <!-- Bootstrap CSS -->
    <link rel = "stylesheet" href = "bootstrap/bootstrap.css">
    
    <!-- Browser tab title -->
    <title>Reset Password | NotNike</title>
  </head>
  <body>
    <!-- The navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <!-- Left side of the navigation bar -->
      <a class = "navbar-brand" href = "index.php">NotNike</a>
      <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarCollapse">
        <span class = "navbar-toggler-icon"></span>
      </button>
      
      <!-- Right side of the navigation bar -->
      <div class = "navbar-collapse collapse w-100" id = "navbarCollapse">
        <ul class = "navbar-nav ml-auto">
          <li class = "nav-item">
            <a class = "nav-link" href = "SignIn.php">Sign In</a>
          </li>
          <li class = "nav-item">
            <a class = "nav-link" href = "SignUp.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <div class = "container"><br>
      <h4>Forgot your password?</h4>
      <hr>
 
      <form method = "post" action = "ProcessReset1.php">
        <div class = "row">
          <div class = "col">
            <div class = "form-group">
              <label for = "username">Username</label>
              <input type = "text" class = "form-control" id = "username" name = "username" placeholder = "Username" aria-describedby = "username" required autofocus>
              <small id = "username" class = "form-text text-muted">Your username (email) will be used to retrieve your security question.</small>
            </div>
          </div>
        </div>
        
		    <div class = "row">
          <div class = "col">
            <div class = "pagination justify-content-end">
		          <button type = "submit" class = "btn btn-warning">Continue</button>
		        </div>
          </div>
        </div>
      </form>
    </div>
    
    <!-- jQuery first, Popper JS, and then Bootstrap JS -->
    <script src = "bootstrap/jquery-3.3.1.slim.min.js"></script>
    <script src = "bootstrap/popper.js"></script>
    <script src = "bootstrap/bootstrap.js"></script>
  </body>
</html>