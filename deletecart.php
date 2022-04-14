<?php
include "./config.php";
$id = $_GET["id"];
$sql = "DELETE FROM cart WHERE cid = '{$id}'";
$result = mysqli_query($conn, $sql);

header("Location: http://localhost/artist/cart.php");

?>