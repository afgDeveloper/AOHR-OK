<?php 
session_start();
include('../include/connection.php');
 if (isset($_SESSION["user_id"])) {
   $id= $_SESSION["user_id"];
   $result = mysqli_query($conn,"select * from user where ID='$id'");
$row = mysqli_fetch_assoc($result);
  
}else{
    header("location:../login.php");
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
    <link href="../css/modern-business.css" rel="stylesheet">

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
    <div class="container col-lg-12">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
                <ol class="breadcrumb">
                    <li><a href="profile.php">Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-2">
                <div class="list-group">
                    <a href="profile.php" class="list-group-item active">Profile</a>
                    <a href="propertylist.php" class="list-group-item">My Property list </a>
                    <a href="propertyregistration.php" class="list-group-item">Property Registration</a>
                    <a href="rentrequest.php" class="list-group-item">Rented Request</a>
                    
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
               
                      <div class="row">
                    
       
   
          <div class="panel panel-info ">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo "Wellcome Dear " . $row["Name"]." ".$row["Last Name"]; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-2 col-lg-2 " align="left"> <img alt="User Pic" src="../Graphic/img/profile.jpg" class="  img-responsive"> </div>
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name</td>
                        <td> <?php echo $row["Name"]; ?></td>
                      </tr>
                      <tr>
                        <td>Last Name : </td>
                        <td><?php echo $row["Last Name"]; ?></td>
                      </tr>
                      <tr>
                        <td>Phone</td>
                        <td><?php echo $row["Phone"]; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Email</td>
                        <td><?php echo $row["Email"]; ?></td>
                      </tr>
                       
                     
                
                     
                    </tbody>
                  </table>
                  
                 
                  <a href="#" class="btn btn-primary pull-right">Edite your Profile</a>

                </div>
              </div>
            </div>
                 
            
          </div>
        </div><!--enf of the the container-->

            </div>
        </div>
        <!-- /.row -->

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
