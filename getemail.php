<?php
include ('connect.php');
$tracking = $_POST['tracking'];
$query = "select * from details where tracking = '$tracking'";
  $result = mysqli_query($db,$query);

  $num_results = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);
  echo stripslashes($row['email']); 
?>