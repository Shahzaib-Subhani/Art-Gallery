<?php include "header.php";
include "../config.php";

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


$sql = "INSERT INTO post (title,price,descrip,seller,img) 
    VALUES('{$title}','{$price}','{$desc}','{$seller}','{$file_name}');";

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

}


if(isset($_POST['draft'])){
  
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


$sql2 = "INSERT INTO draft (title,price,descrip,seller,img) 
    VALUES('{$title}','{$price}','{$desc}','{$seller}','{$file_name}');";

     if($file_ext == "jpg" || $file_ext == "jpeg" || $file_ext == "png"){
        if($file_size >= 3145728){
        
            echo "<center style='color:red;'>Max size limit is 3 MB</center>";
         }
    
         else{
    
            if (mysqli_query($conn, $sql2)) {
                move_uploaded_file($file_tmp,"../draft/".$file_name);
                header("Location: http://localhost/artist/seller/draft.php");
            
    
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

}

?>


<head>
<link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/Home.css">
    <script src="https://kit.fontawesome.com/e3c0290552.js" crossorigin="anonymous"></script>
</head>


 <body>
     
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
                          <input type="text" name="post_title" class="form-control"  required max="40" autocomplete="off" autocapitalize="on">
                      </div>
                      <!-- <div class="form-group">
                          <label for="post_seller">Seller Name</label>
                          <input type="text" name="post_seller" class="form-control" autocomplete="off" required max="40">
                      </div> -->
                      <div class="form-group">
                          <label for="post_price">Price in USD($)</label>
                          <input type="text" name="post_price" class="form-control"  required max="40" autocomplete="off">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="postdesc" class="form-control" rows="4"  required></textarea>
                      </div>
                     
                      <div class="form-group">
                          <label for="exampleInputPassword1" class="fw-bold">Post image</label><br>
                          <input type="file" name="fileToUpload" required>
                          
                          
                      </div>
                      <input type="submit" name="save" class="btn all mt-4" value="SAVE"/>
                      <input type="submit" name="draft" class="btn all mt-4" value="Add to Draft" />
                  </form>
                  <!--/Form -->
              </div>
          </div> 
      </div>
  </div>

 </body>
