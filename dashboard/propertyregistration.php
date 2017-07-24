<?php 
session_start();
include('../include/connection.php');
if (isset($_SESSION["user_id"])) {
   $user_id= $_SESSION["user_id"];
    if ($_SERVER['REQUEST_METHOD']== 'POST') {
        if (isset($_POST) & !empty($_POST)) {
            $property_type = $_POST["property_type"];
            $space_size =$_POST["space_size"];
            $home_price =$_POST["home_price"];
            $address =$_POST["address"];
            $timpstamp = date('m/d/Y');
             $query ="INSERT INTO property VALUES ( NULL , '$user_id' ,'$property_type', '$space_size', '$home_price', '$address' , NULL, '$timpstamp')";
             $result = mysqli_query($conn, $query);
             if ($result) {
                 echo "you have succeded";
             }else {
                echo  "sorry";
             }
             
        }   
    }
}else {
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
                    <a href="profile.php" class="list-group-item ">Profile</a>
                    <a href="propertylist.php" class="list-group-item ">My Property list </a>
                    <a href="propertyregistration.php" class="list-group-item active">Property Registration</a>
                    <a href="rentrequest.php" class="list-group-item">Rented Request</a>
                    
                </div>
            </div>  
            <!-- Content Column -->
            <div class="col-md-8 ">
                   

                <div class="container pull-left" style="max-width:800px;padding:40px 20px;border:solid 1px #DFE2DB

">
                        
                        <form class="form-horizontal" role="form" method="post" action="#">
                            <h2 style="font-weight:bold; text-align:center;">Rigister your Property</h2><hr>
                            <fieldset>
                            
                            <div class="form-group">
                              <label for="property_type" class ="control-label col-sm-3">Property Type</label>
                            <div class="col-sm-8">
                                  <input autofocus="true" required="true" type="text" class="form-control" placeholder="Enter Property type " name="property_type">

                            </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="space_size" class ="control-label col-sm-3">Space size</label>
                            <div class="col-sm-8">
                              <input required="true" type="text" class="form-control" id="space_size" placeholder="Enter space size" name="space_size">
                            </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="price" class ="control-label col-sm-3">Home Price</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                              <input required="true" type="number" class="form-control" id="price" placeholder="Enter price" name="home_price">
                              <span class="input-group-addon">Af</span>
                                </div>
                            </div>
                            </div>

                           
                        
                            <div class="form-group">
                              <label for="address" class ="control-label col-sm-3">Address</label>
                            <div class="col-sm-8">
                                
                              <input required="true" type="address" class="form-control" id="price" placeholder="Enter Address  " name="address">
                              
                            </div>
                            </div>

                            <div class="form-group">
                              <label for="photoselection" class ="control-label col-sm-3">Select Home Photo</label>
                            <div class="col-sm-8">
                                
                              <input type="file" id="photoselection"/>
                              
                            </div>
                            </div>

                           <div class="col-sm-offset-2 col-sm-8">
                             
                             <button type="submit" class="btn btn-default btn pull-right " name="add">Register your home</button>
                           </div>
                           </fieldset>
                         
                        </form>
                    </div>
    

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
