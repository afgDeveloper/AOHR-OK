 <?PHP 
 include('../include/connection.php ');

if ($_SERVER['REQUEST_METHOD']== 'POST') {


  if (isset($_POST) & !empty($_POST)) {
      $name =$_POST['name'];
      $last_name = $_POST['last_name'];
      $phone_number =  $_POST['phone']; 
      $emailaddress =  $_POST['email'];
      $password = md5($_POST['password']);
      $confirmpassword = md5($_POST['confirmpassword']);
      
      if ($password == $confirmpassword) 
            {
      
      
  $query = "INSERT INTO user VALUES ( NULL ,'$name', '$last_name' , '$phone_number', '$emailaddress', '$password' , '$confirmpassword')";
    $result =  mysqli_query($conn, $query);

              if ($result) {
                header("Location:../signup.php");
                 }else
                  {
                echo "recorad could not added to the database";
                  }
            }
        }else {
        header("Location:../signup.php");
        }
      

}// enf of the REQUEST_METHOD


 

 ?> 