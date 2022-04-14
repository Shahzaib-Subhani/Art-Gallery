<?php
 include "../config.php";
 $id = $_GET["id"];
session_start();
if(isset($_POST['save'])){
    
    if(isset($_FILES["fileToUpload"])){
    
        
        $dot = ".";
        $file_name = $_FILES["fileToUpload"]["name"];
        $file_size = $_FILES["fileToUpload"]["size"];
        $file_tmp = $_FILES["fileToUpload"]["tmp_name"];
        $file_type = $_FILES["fileToUpload"]["type"];
        $file_exten = explode('.',$file_name);
        $file_ext = strtolower(end($file_exten));
        $extension = array("jpeg","jpg","png");
    
    
        
    
       
    
        
      
    
    $title = mysqli_real_escape_string($conn,$_POST["post_title"]) ;
    
    $seller = $_SESSION["id"] ;
    $price = mysqli_real_escape_string($conn,$_POST["post_price"]) ;
    $desc = mysqli_real_escape_string($conn,$_POST["postdesc"]) ;
    
    
    $sql = "UPDATE draft SET title='{$title}', price='{$price}', descrip='{$desc}', img='{$file_name}' WHERE post_id = '{$id}'";
    
         if($file_ext == "jpg" || $file_ext == "jpeg" || $file_ext == "png"){
            if($file_size >= 3145728){
            
                echo "<center style='color:red;'>Max size limit is 3 MB</center>";
             }
        
             else{
        
                if (mysqli_query($conn, $sql)) {
                    move_uploaded_file($file_tmp,"../upload/".$file_name);
                    header("Location: http://localhost/artist/seller/products.php");
                
        
               }
               else{
                   echo "<div class='alert alert-danger'>Query Failed</div>";
               }
             }
            
    
         }
    
         else{
            echo "<center style='color:red;'>Only JPG or PNG allowed</center>";
         }
    
    }
    header("Location: http://localhost/artist/seller/draft.php");
    }

      
?>
<head>
<link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/Home.css">
    <script src="https://kit.fontawesome.com/e3c0290552.js" crossorigin="anonymous"></script>
</head>


 <body>
     <?php   
    
        $show = "SELECT * FROM draft WHERE post_id = '{$id}'";
        $show1 = mysqli_query($conn, $show);
        while($row = mysqli_fetch_assoc($show1)){
             ?>
 <div id="admin-content ">
      <div class="container ">
         <div class="row d-flex justify-content-center">
             <div class="col-md-12 text-center">
                 <h1 class="admin-heading">Add New Product</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" class="form-control" value="<?php echo $row["title"]; ?>" required max="40" autocomplete="off" autocapitalize="on">
                      </div>
                      <!-- <div class="form-group">
                          <label for="post_seller">Seller Name</label>
                          <input type="text" name="post_seller" class="form-control" autocomplete="off" required max="40">
                      </div> -->
                      <div class="form-group">
                          <label for="post_price">Price in USD($)</label>
                          <input type="text" name="post_price" class="form-control" value="<?php echo $row["price"]; ?>" required max="40" autocomplete="off">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="postdesc" class="form-control" rows="4"  required><?php echo $row["descrip"]; ?></textarea>
                      </div>
                     
                      <div class="form-group">
                          <label for="exampleInputPassword1" class="fw-bold">Post image</label><br>
                          <input type="file" name="fileToUpload" value="<?php echo $row["img"]; ?>" required>
                          <img  src="../upload/<?php echo $row['img']; ?>" height="150px">
               
                          
                          
                      </div>
                      <input type="submit" name="save" class="btn all mt-4" value="UPDATE"/>
                      
                  </form>
                  <!--/Form -->
              </div>
          </div> 
      </div>
  </div>

  <?php


} ?>

 </body>
