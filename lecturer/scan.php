<?php
ob_start();
require_once '../library/lib.php';
require_once '../classes/crud.php';

$lib=new Lib;
$crud=new Crud;

date_default_timezone_set("africa/lagos");

$bc=$crud->checkOne('student',$_GET['matno']);

$qt=$crud->displayCheckedUser('course_allocation',$_GET['matno'],$_GET['code']);

$bb=$crud->checkTwo('attendance',$_GET['matno'],date("d-m-Y"),$_GET['code']);

if ($bc === false) {
 $lib->redirect2('dashboard.php?msg=Invalid matric number!&type=error');
   exit();
} 

if ($qt === false) {
 $lib->redirect2('dashboard.php?msg=Student is not offering this course!&type=error');
   exit();
} 

if ($bb === true) {
 $lib->redirect2('dashboard.php?msg=Attendance was already taken for today!&type=info');
   exit();
} 


  $d=$crud->displayOne('student',$_GET['matno']);
    $show="barcode.php?codetype=Code39&size=100&text=".'BSU/SC/CMP/15/'.$d['matno']."&print=true";
    echo "<br/<br/><center><img alt='testing' src=".$show." width='500' height='120'/></center>";
?>


<link href="../css/bootstrap.min2.css" rel="stylesheet" id="bootstrap-css">
<script src="../js/bootstrap.min2.js"></script>
<script src="../js/jquery.min2.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript">
        function t() {
       window.location='take-attendance.php?code=<?php echo $_GET['code'] ?>&matno=<?php echo $_GET['matno']; ?>';
        }
        document.write('BARCADE SCANNER IS SCANNING TO TAKE ATTENDANCE, scanning finishes in 5 sec');
        setTimeout('t()',5000);
    </script>
<style type="text/css">
  body {
    margin:0;
    padding:0;
    overflow:hidden;
}
.wrapper {
    height:100vh;
    -webkit-animation: slide 60s linear infinite;
    background:#280202 repeat;
    background-position:120% 100%;
    background-size:cover;
    animation:animatebg 60s linear infinite;
}
.pulse {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    background:url(../images/bsu.jpg);
    background-size:cover;
    animation:animateEarth 12s linear infinite;
    width:200px;
    height:200px;
    border-radius:50%;
    box-shadow:inset 0 0 40px rgba(255,255,255,.5);
}

.pulse span {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    display:block;
    width:100%;
    height:100%;
    border-radius:50%;
    background:transparent;
    border:2px solid #fff;
    box-sizing:border-box;
    animation:animate 6s linear infinite;
}

.pulse span:nth-child(1) {
    animation-delay:0s;
}
.pulse span:nth-child(2) {
    animation-delay:-4s;
}
.pulse span:nth-child(3) {
    animation-delay:4s;
}

@keyframes animate {
    0% {
        width:200px;
        height:200px;
        opacity:1;
    }
    50% {
        opacity:1;
    }
    100% {
        width:500px;
        height:500px;
        opacity:0;
    }
   
}


@keyframes animateEarth {
    0% {
        background-position:0 0;
    }
    100% {
        background-position:719px 0;
    }
}

@keyframes animatebg {
    0% {
        background-position:0 0;
    }
    100% {
        background-position:719px 0;
    }
}






</style>

<div class="wrapper">
    <div class="pulse">
        <span></span>
        <span></span>
        <span></span>
    </div> 
</div>


