<!DOCTYPE html>
<html lang = "en">
  <head>
    <!-- Required meta tags come first -->
    <meta charset = "utf-8">
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
    
    <!-- Bootstrap CSS -->
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
    
    <!-- Browser tab title -->
    <title>Sign In | NotNike</title>
  </head>
  <body>
    <!-- The navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <!-- Left side of the navigation bar -->
      <a class = "navbar-brand" href = "#">NotNike</a>
      <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarCollapse">
        <span class = "navbar-toggler-icon"></span>
      </button>
      
      <!-- Right side of the navigation bar -->
      <div class="navbar-collapse collapse w-100" id = "navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="SignIn.php">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="SignUp.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <div class = "container"><br>
      <!-- Login form | User -->
      
      <h3>Welcome to NotNike! Please sign in to proceed.</h3><hr>
      
      <form method = "post" action = "#">
        <!-- Email -->
        <div class = "row">
          <div class = "col">
            <div class = "form-group">
              <label for = "username">Email</label>
              <input type = "email" class = "form-control" id = "username" name = "username" placeholder = "Email" required autofocus>
            </div>
          </div>
        </div>
        
        <!-- Password -->
        <div class = "row">
          <div class = "col">
            <div class = "form-group">
              <label for = "userpassword">Password</label>
              <input type = "password" class = "form-control" id = "userpassword" name = "userpassword" placeholder = "Password" pattern = ".{8,20}" required>
            </div>
          </div>
        </div>
        
        <!-- Submit button -->
        <div class = "row">
          <div class = "col">
            <div class = "text-right">
              <p>Forgot password? <a class = "text-info" href = "#">Reset password</a></p>
              <p>First time here? <a class = "text-info" href = "SignUp.php">Sign Up</a></p>
              <button type = "submit" class = "btn btn-info">Sign In</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    
    <!-- jQuery first, Popper JS, and then Bootstrap JS -->
    <script src = "bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src = "bootstrap/js/popper.js"></script>
    <script src = "bootstrap/js/bootstrap.js"></script>
  </body>
</html>