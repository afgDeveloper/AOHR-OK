<?PHP 
session_start();
include('include/connection.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['email'])){ 
      $Email= $_POST['email'];
      $Pwd= md5($_POST['password']);

      $sql ="SELECT * FROM user WHERE Email='$Email' AND Password='$Pwd'";
      $selectquery =mysqli_query($conn,$sql);
   

      if(mysqli_num_rows($selectquery) > 0){
        $feilds = mysqli_fetch_assoc($selectquery);
        $_SESSION["user_id"] = $feilds["ID"];
        
        

      header("Location:dashboard/Profile.php");
      }else{
        //echo "opps";
        header("Location:login.php");
      }
  }
}






 ?> 
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
    <form method="post" class="form-signin" autocomplete="off" action="<?= $_SERVER['PHP_SELF'] ?>">
           
    
      <h4 class="form-signin-heading">Afghan Online Home Renting System</h4>
      <hr>
      <h2 class="form-signin-heading">Please Sign In</h2>
      <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
      <br>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">login</button>
      <br>
      <strong><a href="signup.php">don't Have any account? </strong>
      <hr>
      <strong><a href="index.php">Home</strong>
    </form>
  </div>
</body>
</html>
  