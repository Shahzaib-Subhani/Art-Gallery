<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXHIBTION</title>
    <link rel="stylesheet" type="text/css" href="css/Home.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="https://kit.fontawesome.com/e3c0290552.js" crossorigin="anonymous"></script>
</head>
<body style="overflow-x: hidden !important;">
    <!-- NAVBAR -->

    <?php  include_once 'navbar.php'; ?>
<!-- Body -->
<div class="container-fluid">
    
<div class="row    main text-center pt-3 pb-3 " style="border-bottom:1px solid lightgrey">
    <div class="fn events text-black">Journal</div>
</div>

<div class="row    pt-5 pb-5 main d-flex justify-content-evenly">

<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-3">
    <a href="#">
        <img src="images/gar.jpg" alt="" width="80%">
    </a>
</div>

<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-3">
    <a href="#">
        <img src="images/house.jpg" alt="" width="80%">
    </a>
</div>

<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-3">
    <a href="#">
        <img src="images/man.jpg" alt="" width="80%">
    </a>
</div>

<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-3">
    <a href="#">
        <img src="images/mill.jpg" alt="" width="80%">
    </a>
</div>



<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-3">
    <a href="#">
        <img src="images/2.jpg" alt="" width="80%">
    </a>
</div>

<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-3">
    <a href="#">
        <img src="images/native.jpg" alt="" width="80%">
    </a>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-3">
    <a href="#">
        <img src="images/naked.jpg" alt="" width="80%">
    </a>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-3">
    <a href="#">
        <img src="images/5.jpg" alt="" width="80%">
    </a>
</div>

</div>



<div class=" row    mt-5  d-flex justify-content-center ">
    <div class="sale ">
    <div class="text-white fs-3 mt-5 fw-bold text-center mon">FLEMISH PRIMITIVES - NETHERLANDISH PAINTERS</div>
    <div class="tex-white fs-3 text-center  fn mb-3 text-white">Wednesday, August 24</div>
    <h1 id="demo" class="fs-1 mon fw-bold mb-5  text-white text-center"></h1>


    <div class="row d-flex justify-content-center">
        
         <div class="show1 d-flex justify-content-center align-items-center  mon col-xl-1 ms-1" >DAYS</div>
            <div class="show1  mon col-xl-1 ms-1 d-flex justify-content-center align-items-center" >HOURS</div>
            <div class="show1  mon col-xl-1 ms-1 d-flex justify-content-center align-items-center" >MINS</div>
            <div class="show1  mon col-xl-1 ms-1 d-flex justify-content-center align-items-center" >SECS</div>
            </div>
        

    <div class="row d-flex justify-content-center mb-5 ">
        
        <div class="show2 d-flex justify-content-center align-items-center  fw-bold mon col-xl-1 ms-1" id="demo1"></div>
        <div class="show2 fw-bold mon col-xl-1 ms-1 d-flex justify-content-center align-items-center" id="demo2"></div>
        <div class="show2  fw-bold mon col-xl-1 ms-1 d-flex justify-content-center align-items-center" id="demo3"></div>
        <div class="show2  fw-bold mon col-xl-1 ms-1 d-flex justify-content-center align-items-center" id="demo4"></div>
        </div>
    
</div>


<!-- FOOOTER -->
<?php include_once 'footer.php'; ?>
</div>



<!-- FOOOTER -->
<?php include_once 'footer.php'; ?>
<!-- SCRIPTS -->
    <script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<!-- Display the countdown timer in an element -->

<script>
// Set the date we're counting down to
var countDownDate = new Date("AUG 24, 2022 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  

  document.getElementById("demo1").innerHTML =   days ;
  document.getElementById("demo2").innerHTML =   hours;
  document.getElementById("demo3").innerHTML =   minutes ;
  document.getElementById("demo4").innerHTML =   seconds ;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</body>
</html>