



<html>
    <head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/Home.css">
    <link rel="stylesheet" href="../css/cart.css">
    <script src="https://kit.fontawesome.com/e3c0290552.js" crossorigin="anonymous"></script>
    <title>Art | GALLERY</title>
    </head>

    <body>
        <?php include_once("header.php"); ?>
		<div class="container-fluid">
       <div class="   row d-flex text-center  mt-3 grey">
            <div class="text-black fn events col-xl-12">Your Draft</div>
        </div>
		
 
		<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							
							
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
					<?php
  include "../config.php";

   $sql = "SELECT * FROM draft WHERE seller = '{$_SESSION['id']}' ORDER BY post_id DESC";

   $result = mysqli_query($conn, $sql) or die("QUERY FAILED");

   if(mysqli_num_rows($result) > 0){
	    
	     while($row = mysqli_fetch_assoc($result)){


?>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 "><img src="../upload/<?php echo $row["img"]; ?>" class="col-xl-7 col-lg-7 col-md-10 col-sm-12 col-5" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $row["title"]; ?></h4>
										
									</div>
								</div>
							</td>
							<td data-th="Price">$<?php echo $row["price"]; ?></td>
							
							
							<td class="actions" data-th="">
								<a href="updatedraft.php?id=<?php echo $row['post_id']; ?>"><button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
								<a href="deletedraft.php?id=<?php echo $row['post_id']; ?>"><button class="btn btn-danger btn-sm "><i class="fa fa-trash-o"></i></button></a>								
							</td>
						</tr>

						<?php   }
   }

   else{
	   echo "NO PRODUCT";
   }

   ?>
					</tbody>
					
				</table>

    </div>



        
    </body>
</html>