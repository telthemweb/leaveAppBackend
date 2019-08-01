<!DOCTYPE html>
<html>
<head>
  <title>Leave App - Login</title>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
  <!-- //''''''''''''''''''''''''''''''Navbar'''''''''''''''''''''''''''' -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-primary">
  <div class="container">
  <a class="navbar-brand" href="index.php"><b style="font-size: 20px; font-weight: bold;">Leave</b> <span style="font-size: 20px; color: #c3cc18;font-weight: bold;">App</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
     <ul class="navbar-nav mr-right">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Create Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
   
  </div>
  </div>
</nav>
<!-- //''''''''''''''''''''''''''''''Navbar'''''''''''''''''''''''''''' -->

<div class="container telthem-login">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Create Account</div>
        <div class="card-body">
          <form class="form-signin">
          	<label for="name" class="sr-only">First Name</label>
          <input type="text" id="fname" class="form-control" placeholder="First Name" required autofocus><br>

          	<label for="lname" class="sr-only">Last Name</label>
          <input type="text" id="lname" class="form-control" placeholder="Last Name" required autofocus><br>

          <label for="ec_number" class="sr-only">Ec Number</label>
          <input type="text" id="ec_number" class="form-control" placeholder="Ec Number" required autofocus><br>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required><br>
         
          <button class="btn btn-lg btn-success btn-block" type="submit">Create Account</button>
        </form>
      </div>
      <div class="card-footer">
       <p class="text-center">I have an account please click  <a href="login.php">Sign in</a> here ?</p>
      </div>
      </div>
    </div>
    <div class="col-md-2"></div>

    
  </div>
</div>
</body>
</html>