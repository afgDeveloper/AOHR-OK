<?PHP 
include('include/connection.php ');

$result = mysqli_query($conn,"select * from property");
$row = mysqli_fetch_assoc($result);


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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/customestyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  

</head>

<body>

 <?php 
include('include/menu.php');

    ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Property for Rent
                   
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Property for Rent</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- the code the juava script pop up  -->
               <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
             <<strong>Please Log in First </strong> 
            </div>
          </div>
        </div> 
 <!-- end of the code for javas script to pop up and say first you have to log in. =-=-->
   
        
       <?php do { ?>
        <div class="row">
            <div class="col-md-6">
                
                    <img class="img-responsive img-hover" src="Graphic/img/1.jpg" alt="home pic for renting ">
                
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
                

                
                <br>
                <a data-toggle="modal" data-target=".bs-example-modal-sm" class="btn btn-primary" href="dashboard/rentingVeiwregistration.php?id=<?php echo $row["Property_id"]; ?>">
                Rent this</i></a>
            </div>
        </div>
       <hr>
       <?php }
      while($row = mysqli_fetch_assoc($result)); 
            ?>
       
       

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <ol class="breadcrumb">
                    
                </ol>

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
