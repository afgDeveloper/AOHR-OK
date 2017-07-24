<?PHP 

session_start();
include('../include/connection.php');
 if (isset($_SESSION["user_id"])) {
   $user_id= $_SESSION["user_id"];
  //-------------the above was about the sesssion ad the bellow are all abou the about the the fetching and PHP code----------------------------
    $id =$_GET["id"];
    //--------the below are abou the property to send via id  from rent requst page and then show or echo it here ----------
    $property_query = mysqli_query($conn,"select * from property WHERE Property_id =$id");
    $row = mysqli_fetch_assoc($property_query);
   
//---------ALL About the rentrequest list------------------
    $rent_query = mysqli_query($conn,"select * from rent inner join user on user.ID = Rentor_id WHERE Property_id =$id");
    $rent_row = mysqli_fetch_assoc($rent_query);
    
    //-----------------this is all about the the user fetching --------------
    /*$user_query = mysqli_query($conn,"select * from user WHERE ID= $rentor_id");
    $user_row = mysqli_fetch_assoc($user_query);*/

    
   
}else  {
    header("Location:../login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Afghan Online Home Renting</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/customestyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  

</head>

<body>
<!--start of the navigation-->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="../Graphic/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a href="rentingVeiw.php">Renting</a>
                    </li>
                    
                    <li>
                        <a href="profile.php">Dashboard</a>
                         
                    </li>
                    <li>
                        <a href="../logout.php">logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav><br>
                
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Requsted List
                   
                </h1>
                <ol class="breadcrumb">
                    <li><a href="rentrequest.php">Back</a>
                    </li>
                    <li class="active"> Renting Requested list </li>
                </ol>
            </div>
        </div>
                
   
        
       <?php do { ?>
        <div class="row">
            <div class="col-md-6">
                
                    <img class="img-responsive img-hover" src="../Graphic/img/1.jpg" alt="home pic for renting ">
                
            </div>
            <div class="col-md-5">
                <h3><?php echo $row["Property_type"]; ?></h3>
                <strong>size :</strong>
                <span><?php echo $row["Space_size"]; ?></span>
                <br>
                <strong>price :</strong>
                <span><?php echo $row["Price"]; ?> AF per 24 houer</span>
                <br>
                <strong>Address :</strong>
                <span><?php echo $row["Address"]; ?></span>
                <br>
                <strong>Registraion date :</strong>
                <span><?php echo $row["Registration_date"]; ?></span>
                <br>
                

                
                
            </div>
        </div>
       <hr>
       <?php }
      while($row = mysqli_fetch_assoc($property_query)); 
            ?>
       
        
      <div class="container">
  <h2>Request list for this Property </h2>
              
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Requst Date</th>
        <th>Confirmation</th>
        

      </tr>
    </thead>
    <?php do { ?>
    <form method="POST" action="../php_redirect_file/rent_request_confirm.php">
    <tbody>
      <tr>
        <td><?php echo $rent_row["Name"]; ?></td>
        <td><?php echo $rent_row["Last Name"]; ?></td>
        <td><?php echo $rent_row["Phone"]; ?></td>
        <td><?php echo $rent_row["Email"]; ?></td>
        <td><?php echo $rent_row["request_rent_start_date"]; ?></td>
        <td><?php echo $rent_row["request_rent_end_date"]; ?></td>
        <td><?php echo $rent_row["Request_date"]; ?></td>
        <td><button class="btn btn-primary" type="submit" href="../php_redirect_file/rent_request_confirm.php">Confirm</button></td>

      </tr>
      
    </tbody>
    <?php }
      while($rent_row = mysqli_fetch_assoc($rent_query)); 
            ?>
    </form>
  </table>
</div>

        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                   <p>Copyright &copy; Afghan Online Home Renting 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>