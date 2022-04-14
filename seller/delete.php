<?php
include "../config.php";
$id = $_GET["id"];
$sql = "DELETE FROM post WHERE post_id = '{$id}'";
$result = mysqli_query($conn, $sql);

header("Location: http://localhost/artist/seller/products.php");

?>