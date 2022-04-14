<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/Home.css">
<link rel="stylesheet" href="css/bootstrap.css">

<script src="https://kit.fontawesome.com/e3c0290552.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


<title>Arte | Art Gallery</title>
<style>
  
</style>

</head>
<body style="overflow-x:hidden">

    <!--  Navbar -->

<?php include_once 'Navbar.php'; ?>

<!-- PHP -->


<!-- BODY -->
<?php 
    include "config.php";
    
     $id = $_GET["id"];
     
      $sql = "SELECT * FROM post WHERE post_id = '{$id}'";

      $rest = mysqli_query($conn , $sql);

      while($row = mysqli_fetch_assoc($rest)){

        $title = $row["title"];
        $price = $row["price"];
        $desc = $row["descrip"];
        $img = $row["img"];
        $seller = $row["seller"];
    }
        ?>

<!-- PHP -->

<?php
 
$sql1 = "SELECT id FROM user WHERE email = '{$_SESSION['email']}'";
$result2 = mysqli_query($conn,$sql1);

while($row2 = mysqli_fetch_assoc($result2)){

    $user_id =  $row2["id"];
}



if(isset($_POST["save"])){
    $quantity = $_POST['quantity'];

    $sql3 = "INSERT INTO cart(title,price,descrip,user,img,quantity,sell)
    VALUES('{$title}','{$price}','{$desc}','{$user_id}','{$img}','{$quantity}','{$seller}')";

    $save = mysqli_query($conn, $sql3);

    header("Location: http://localhost/artist/cart.php");
}

if(isset($_POST["buy"])){
    
        
    header("Location: http://localhost/artist/checkout.php");
}
?>
<!-- PHP -->

<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST"> 
    <div class="row container-fluid mt-5 d-flex justify-content-evenly mb-5">
    <img src="./upload/<?php echo $img; ?>" alt="" class="col-xl-4 col-lg-4 col-md-4 mt-3 col-sm-6">

    <div class="col-xl-6 col-lg-6 col-ms-6 col-sm-6 ">

  
        <div class="fn fs-1 fw-bold ps-5"> <?php echo $title ;?> </div>
        <div class="date mon fs-2 ps-5 fw-bold">$ <?php echo $price; ?> </div>

        <div class="mon fw-bold fs-5 ps-5 mt-5"> <?php echo $desc; ?></div>

        <div class="ps-5 mt-3"> 
           
            <input type="number" name="quantity" id="" max="5" min="1" value="1" class="inp1 ps-3">
          
        </div>

        <div class="mt-3 ms-5 d-flex justify-content-center ">
        
        <input type="submit" name="save" class="  all  mt-4 fs-5 all1" value="Add to Cart"/>
        
        
        <input type="submit" name="buy" class=" all mt-4 ms-5 fs-5 all1" value="Buy Now" />
       
        </div>
       
       
    </div>

</div>
</form>






<!-- Footer -->
<?php  include_once 'footer.php' ?>
<!--  Scripts -->
  <script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>

</body>
</html>