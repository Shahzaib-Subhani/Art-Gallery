<head>

<link rel="stylesheet" href="css/bootstrap.css">

<script src="https://kit.fontawesome.com/e3c0290552.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/Home.css">
<link rel="stylesheet" href="css/all.min.css">


</head>

<!------ Include the above in your HEAD tag ---------->

<body>
    <?php include "Navbar.php"; ?>
    <?php  
    include "config.php";
    $sql = "SELECT * FROM cart Join user WHERE cart.sell = user.id AND user = '{$_SESSION['id']}'";
    $result = mysqli_query($conn, $sql);

    
        
    
    
    ?>

	<section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
            <p class="mb-5 text-center">
                <i class="text-info font-weight-bold"><?php echo mysqli_num_rows($result); ?></i> items in your cart</p>
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="width:60%">Product</th>
                        <th style="width:12%">Price(1)</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:16%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php  while($row = mysqli_fetch_assoc($result)){ 
                       
                        ?>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="upload/<?php  echo $row["img"]; ?>" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4><?php  echo $row["title"]; ?></h4>
                                    <p class="font-weight-light">SELLER: <?php echo $row["fname"]; ?> </p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">$<?php  echo $row["price"]; ?></td>
                        <td data-th="Quantity">
                            <p> &nbsp; &nbsp;  <?php  echo $row["quantity"]; ?></p>
                        </td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <a href="editcart.php?id=<?php echo $row["cid"]; ?>"><button class="btn btn-info   btn-md mb-2">
                                    <i class="fas fa-edit"></i>
                                </button></a>
                                <a href="deletecart.php?id=<?php echo $row["cid"]; ?>"><button class="btn btn-danger   btn-md mb-2">
                                    <i class="fas fa-trash"></i>
                                </button></a>

                            </div>
                        </td>
						<td>
						<button class="btn all   btn-md mb-2">
                                   Buy
                                </button>
						</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="shop.php">
                <i class="fas fa-arrow-left mr-2"></i> Continue Shopping</a>
        </div>
    </div>
</div>
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
</body>