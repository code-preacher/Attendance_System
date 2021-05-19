<?php
include '../inc/config.php';
?>


<?php
if(isset($_POST['end'])){
date_default_timezone_set("africa/lagos");
$k=mysqli_query($con,"select * from attendance where date='".date("d-m-Y")."'");
while ($j=mysqli_fetch_array($k)) {
$t=date("h:i:s A",strtotime("+0 HOURS"));
mysqli_query($con,"update attendance set timeout='$t' where name='".$j['name']."' ");
}
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="">
  <title>Final</title>

  
  <link href="../css/bootstrap.min2.css" rel="stylesheet">
  <!--external css-->
  <link href="../css/font-awesome.css" rel="stylesheet" />

   <link rel="stylesheet" href="../css/bootstrap.min.css">  
      <link rel="stylesheet" type="text/css" href="../css/style1.css">

</head>

<body>


  <section id="container">
    
    <section id="main-content">
      <section class="wrapper">

        <div class="row mt">
          <!-- /col-lg-6 -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <!--  ALERTS EXAMPLES -->
            <div class="showback">
            
      <?php
date_default_timezone_set("africa/lagos");
$d=mysqli_query($con,"select * from attendance where date='".date("d-m-Y")."' order by id desc");
while ($f=mysqli_fetch_array($d)) {
    ?>

              <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><?php echo $f['name']." with matric number ".$f['matno']; ?></b> is present</div>
            
                <?php

           }

      ?>
           
            </div>
            
   
          <!-- /showback -->
          </div>
          <!-- /col-lg-6 -->
            <!-- /col-lg-6 -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <!--  ALERTS EXAMPLES -->
            <div class="showback">
             <form id="register_form" novalidate  action="#" method="POST">
                  <div class="card" style="border-top: 4px solid orange;border-bottom: 4px solid orange;border-radius: 4px;">
                     <h3 class="card-header">Attendance Switch</h3>
                     <div class="card-body">
                        <div class="input-group input-group-lg">
                           
                           <input type="submit" class="btn btn-warning btn-block btn-lg" name="end" value="End Attendance" aria-describedby="sizing-addon1" required="" />
                        </div>
                        <br>
                    
               </form>
              
            </div>
            
   
          <!-- /showback -->
          </div>
          <!-- /col-lg-6 -->

        </div>
        <!--/ row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
   
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../js/jquery.min2.js"></script>

  <script src="../js/bootstrap.min2.js"></script>

  
</body>

</html>
