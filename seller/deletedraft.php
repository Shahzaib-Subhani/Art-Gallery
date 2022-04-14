<?php
include "../config.php";
$id = $_GET["id"];
$sql = "DELETE FROM draft WHERE post_id = '{$id}'";
$result = mysqli_query($conn, $sql);

header("Location: http://localhost/artist/seller/draft.php");

?>