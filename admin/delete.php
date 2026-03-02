<?php
session_start();
include '../dp.php';
if (isset($_GET['user_id'])) {
  $product_id = $_GET['user_id'];
  $sql = "delete from users where Id='$product_id'";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    echo "Error!:{$conn->error}";
  } else {
    header("location:userlist.php");
  }
}
