
<?php
ob_start();
require_once '../library/lib.php';
require_once '../classes/crud.php';

$lib=new Lib;
$crud=new Crud;

$lib->check_login2();
$course=$crud->displayAllWithOrder('course','id','desc');
?>

<?php
if(isset($_POST['sub'])){
$crud->insertLecturer($_POST,$_FILES);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title> STUDENT ATTENDANCE MANAGEMENT SYSTEM USING BARCODE</title>
    
    <!-- Basic SEO -->
     <meta name="description" content="STUDENT ATTENDANCE MANAGEMENT SYSTEM USING BARCODE ">
    <meta name="keywords" content="STUDENT ATTENDANCE MANAGEMENT SYSTEM USING BARCODE ">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/">
 
   
    <link href="../css/bootstrap.min3.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link href="../css/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
     
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="col-lg-12">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="dashboard.php">Back to Home <i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Lecturer</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">


                    <!-- /# column -->
                    <div class="col-lg-8 offset-lg-2">
                        <div class="card">
                             
                            <div class="card-title">
                                <h4>ADD LECTURER
                                </h4>
                       
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="add-lecturer.php" method="POST" enctype="multipart/form-data">
                                       
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Fullname :</p>
                                            <input type="text" class="form-control input-rounded" name="name" placeholder="Fullname" required="required">
                                        </div>
                                          <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Email:</p>
                                            <input type="text" class="form-control input-rounded" name="email" placeholder="Email" required="required">
                                        </div>
                                          <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Password :</p>
                                            <input type="text" class="form-control input-rounded" name="password" placeholder="Password" required="required">
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Address :</p>
                                            <input type="text" class="form-control input-rounded" name="address" placeholder="Address" required="required">
                                        </div>
                                   
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Upload  Image :</p>
                                            <input type="file" class="input-rounded" name="pic" placeholder="Please upload image" required="required">
                                        </div>
                                       
                                        <div class="form-actions">
                                        <button type="submit" name="sub" class="btn btn-success col-lg-4"> <i class="fa fa-plus"></i> Add</button>
                                        <button type="reset" class="btn btn-inverse col-lg-4">Clear</button>
                                    </div>
                                    </form>
                                </div>

<br><br>

                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


              
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->

            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="../js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/scripts.js"></script>


</body>

</html>