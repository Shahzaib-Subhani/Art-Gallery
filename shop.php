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

<!-- Body -->

<div class="row ">
    <div class="text-black fs-1 pt-5 fn fw-bold text-center">SHOP</div>
</div>

<div class="row pt-5 d-flex justify-content-evenly mb-5">
<!-- 1 -->
<?php  
  include "config.php";

  $sql = " SELECT * FROM post ORDER BY post_id DESC";

  $result = mysqli_query($conn, $sql) or die("QUERY FAILED");

  if(mysqli_num_rows($result) > 0){
     
      while($row = mysqli_fetch_assoc($result)){

?>
<div class="card c1 ms-2 col-xl-3 col-lg-4 col-md-4 mt-5" style="width: 18rem;">
 <a href="product1.php?id=<?php echo $row['post_id']; ?>"> <img class="card-img-top" src="./upload/<?php echo $row["img"]; ?>" alt="Card image cap"></a>
  <div class="card-body">
    <p class="card-text fs-5 text-black fn fw-bold text-start "><?php echo $row["title"] ?></p>
    <p class="date fs-6 change1">$<?php echo $row["price"]; ?></p>
  </div>
</div>


<?php } } 
?>

</div>
<!-- Footer -->
<?php  include_once 'footer.php' ?>
<!--  Scripts -->
  <script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<!-- <script>
    $(document).ready(function(){

        $(".c1").mouseenter(function(){
            $(".change1").text("ADD TO CART");
        });

        $(".c1").mouseleave(function(){
            $(".change1").text("$16,800");
        });

        // 2
        $(".c2").mouseenter(function(){
            $(".change2").text("ADD TO CART");
        });

        $(".c2").mouseleave(function(){
            $(".change2").text("$12,800");
        });

        // 3
        $(".c3").mouseenter(function(){
            $(".change3").text("ADD TO CART");
        });

        $(".c3").mouseleave(function(){
            $(".change3").text("$19,200");
        });

        // 4
        $(".c4").mouseenter(function(){
            $(".change4").text("ADD TO CART");
        });

        $(".c4").mouseleave(function(){
            $(".change4").text("$11,600");
        });

        // 5

        $(".c5").mouseenter(function(){
            $(".change5").text("ADD TO CART");
        });

        $(".c5").mouseleave(function(){
            $(".change5").text("$15,900");
        });

        // 6
        $(".c6").mouseenter(function(){
            $(".change6").text("ADD TO CART");
        });

        $(".c6").mouseleave(function(){
            $(".change6").text("$45,800");
        });

        // 7
        $(".c7").mouseenter(function(){
            $(".change7").text("ADD TO CART");
        });

        $(".c7").mouseleave(function(){
            $(".change7").text("$12,800");
        });

        // 8
        $(".c8").mouseenter(function(){
            $(".change8").text("ADD TO CART");
        });

        $(".c8").mouseleave(function(){
            $(".change8").text("$16,600");
        });
    });
</script> -->

</body>
</html>