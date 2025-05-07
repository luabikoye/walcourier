 <?php
include ('connect.php');
if($_GET['tracking'])
{
	
$query = "delete from details where tracking = '".$_GET['tracking']."'";
}
else{
$query = "delete from details where id = '".$_GET['id']."'";
}
  $result = mysqli_query($db,$query);
header("Location: ".$_GET['return']);
exit;
?>