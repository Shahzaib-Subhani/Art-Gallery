<?php

 session_start();
 if(!isset($_SESSION["email"])){

  header("Location: http://localhost/artist/log.php");
  
 }

?>


<nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="products.php">
                <img src="../images/Asset-5@0.5x.png" alt="" class="pic">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse fle" id="navbarNavAltMarkup">
            <div class="navbar-nav mynav">
            
              
              <a class="nav-link active ms-xl-5 ms-lg-5 ms-1" href="visit.php"></a>
              <a class="nav-link active ms-1" href="addproduct.php">ADD A PRODUCT</a>
              <a class="nav-link active ms-1" href="draft.php">DRAFT</a>
              <a class="nav-link active ms-1 me-xl-5 me-lg-5" href="#">CUSTOMERS</a>

              <a href="../logout.php" class="nav-link  ms-xl-5 ms-lg-5 ">LOG OUT</a>
              <a class="nav-link  ms-xl-2 " href="../Home.php">BUYER</a>
              <a  class="nav-link date "><?php 

include "../config.php";
$name = "SELECT fname FROM user WHERE email = '{$_SESSION['email']}'";
$result1 = mysqli_query($conn ,$name);

while($row1 = mysqli_fetch_assoc($result1)){
    echo $row1["fname"];

}



?></a>

            </div>
          </div>
        </div>
      </nav>


      <script src="js/jquery-3.6.0.min.js"></script>
      <script src="../js/bootstrap.js"></script>
  <script>
  
   





 </script>







