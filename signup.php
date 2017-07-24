
<!doctype html>
<!DOCTYPE html>
<html>
<head>
  <title>login page</title>
  <link rel="stylesheet" type="text/css" href="css/customstyle.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
    <link href="css/customestyle.css" rel="stylesheet">

</head>
<body>
<div class="wrapper">
    
    <form class="form-signin" method="POST" autocomplete="off" action="php_redirect_file/signupredirect.php">       
      
      <h4 class="form-signin-heading">Afghan Online Home Renting System</h4>
      <hr>
      <h2 class="form-signin-heading">Register your self</h2>
      <input type="text" class="form-control" name="name" placeholder="Type your name" required="true" autofocus />
      <br>
      <input type="text" class="form-control" name="last_name" placeholder="Type your Last Name" required="true" />
      <br>
      <input type="text" class="form-control" name="phone" placeholder="Type your Phone number" required="true" />
      <br>
      <input type="text" class="form-control" name="email" placeholder="Type your Email Address" required="true" />
      <br>
      <input type="password" class="form-control" name="password" placeholder="Type your Password" required="true" />      
     <br>
     <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm your password" required="true" />      
     <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup">Sign Up</button> <br>
      <strong><a href="login.php">i have an account! </strong>
      <hr>
      <strong><a href="index.php">Home</strong>
    </form>
  </div>
</body>
</html>
  