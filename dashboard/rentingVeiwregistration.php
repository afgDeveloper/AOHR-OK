<?PHP 

session_start();
include('../include/connection.php');
 if (isset($_SESSION["user_id"])) {
   $user_id= $_SESSION["user_id"];
  //-------------the above was about the sesssion ad the bellow are all abou the about the the fetching and PHP code----------------------------
    $id =$_GET["id"];
    $property_query = mysqli_query($conn,"select * from property WHERE Property_id = $id");
    $row = mysqli_fetch_assoc($property_query);
    if ($_SERVER['REQUEST_METHOD']== 'POST') {
        if (isset($_POST) & !empty($_POST)) {
            $start_date= $_POST['start_date'];
             $end_date = $_POST['end_date'];
             $requst_date =date('m/d/Y');
             $status = 0;
             $query ="INSERT INTO rent VALUES ( NULL , '$id' , '$user_id' , '$requst_date' , '$status' , NULL , NULL , '$start_date' , '$end_date')";
             $result = mysqli_query($conn, $query);
             if ($result) {
                echo "Sucessfully ";
             }else { 
                echo "could not ";
             }
        }   
    }
   
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
                <h1 class="page-header">Property for Rent
                   
                </h1>
                <ol class="breadcrumb">
                    <li><a href="rentingVeiw.php">Back</a>
                    </li>
                    <li class="active">Renting Veiw Registration</li>
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
       
        
        <hr>

        <div class="row">
           
            <div class="col-md-6">
                <div class="container" style="max-width:500px;padding:20px 20px;border:solid 1px #DFE2DB">
                    <form class="form-horizontal" role="form" method="POST" action="#">
                            <h2 style="font-weight:bold; text-align:center;">Renting Information</h2><hr>
                            
                            
                            <div class="form-group">
                                <div>
                                    <label for="start_date" class ="control-label col-sm-3">Rent From </label> 
                                </div>
                                <div class="col-sm-8">
                                    <input required="true" type="date" class="form-control" name="start_date">
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <div>
                                    <label for="end_date" class ="control-label col-sm-3"> Up to</label> 
                                </div>
                                <div class="col-sm-8">
                                    <input required="true" type="date" class="form-control" name="end_date">
                                </div>
                            </div>



                           
                            <div class="col-sm-offset-2 col-sm-8">
                             
                             <button type="submit" class="btn btn-default btn pull-right " name="add">Register your home</button>
                           </div>
                          
                    </form>

                </div><!--end of the class container -->

            </div><!--end of the col md 6-->
            
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
