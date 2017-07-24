<?php 

session_start();
include('../include/connection.php');
 if (isset($_SESSION["user_id"])) {
   $id= $_SESSION["user_id"];

    


    $result= mysqli_query($conn,"select * from property where User_id=$id and Property_id in (select Property_id from rent)");
    $row = mysqli_fetch_assoc($result);
    


}else{
    header("location:../login.php");
}



?>

<!DOCTYPE html>
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
                <a class="navbar-brand" href="../index.php"><img src="../Graphic/logo.png"></a>
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
                    <a href="profile.php" class="list-group-item ">Profile</a>
                    <a href="propertylist.php" class="list-group-item ">My Property list </a>
                    <a href="propertyregistration.php" class="list-group-item ">Property Registration</a>
                    <a href="rentrequest.php" class="list-group-item active">Rented Request</a>
                    
                </div>
            </div>
          <div class="col-md-9">
            <?php do { ?>
        
        <div class="row">
            <div class="col-md-2">
                
                    <img class="img-responsive img-hover" src="../Graphic/img/1.jpg" alt="home pic for renting ">
                
            </div>
            <div class="col-md-6">
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
                <a class="btn btn-primary pull-right" href="rentrequest_list.php?id=<?php echo $row["Property_id"]; ?>">
                has request</i></a>
                
            </div>
        </div>
        
       <hr>
       <?php }
      while($row = mysqli_fetch_assoc($result)); 
            ?>
            </div>

        <hr>
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
