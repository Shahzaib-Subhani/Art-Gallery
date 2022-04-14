<?php
include "config.php";
$id = $_GET["id"];


if(isset($_POST["save"])){
    $quan = $_POST["quantity"];
    $sql = "UPDATE cart SET quantity='{$quan}' WHERE cid = '{$id}'";
    $result = mysqli_query($conn, $sql);
    header("Location: http://localhost/artist/cart.php");

}
?>

<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.css">

<script src="https://kit.fontawesome.com/e3c0290552.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/Home.css">
<link rel="stylesheet" href="css/all.min.css">
    </head>

    <body>
        <?php include "Navbar.php"; ?>
        <?php   
    
    $show = "SELECT * FROM cart WHERE cid = '{$id}'";
    $show1 = mysqli_query($conn, $show);
    while($row = mysqli_fetch_assoc($show1)){
         ?>
        <div id="admin-content ">
      <div class="container ">
         <div class="row d-flex justify-content-center">
             <div class="col-md-12 text-center">
                 <h1 class="admin-heading">Update Cart Item</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                  <div class="d-flex justify-content-center">
                  <img  src="./upload/<?php echo $row['img']; ?>" height="150px">
                  </div>
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" class="form-control" value="<?php echo $row["title"]; ?>" disabled required max="40" autocomplete="off" autocapitalize="on">
                      </div>
                      <!-- <div class="form-group">
                          <label for="post_seller">Seller Name</label>
                          <input type="text" name="post_seller" class="form-control" autocomplete="off" required max="40">
                      </div> -->
                      <div class="form-group">
                          <label for="post_price">Price in USD($)</label>
                          <input type="text" name="post_price" class="form-control" value="<?php echo $row["price"]; ?>" disabled required max="40" autocomplete="off">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="postdesc" class="form-control" rows="4" disabled required><?php echo $row["descrip"]; ?></textarea>
                      </div>
                     
                      <div class="form-group mt-3">
                          
                          <input type="number" name="quantity" value="1" min="1"  max="5" required >
                          
               
                          
                          
                      </div>
                      <input type="submit" name="save" class="btn all mt-4" value="UPDATE"/>
                      
                  </form>
                  <!--/Form -->
              </div>
          </div> 
      </div>
  </div>
<?php } ?>
  <script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
    </body>
</html>