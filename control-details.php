<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Control Panel</title>
	</head>
	<body>

<div align="center">
	<br><br>
  <h2>Tracking Records for <?php echo $_GET['id']; ?></h2>
	<table border="1" width="50%">
		<tr>
			<td>Tracking No</td>
			<td>Location</td>
			<td>Status</td>
			<td>Date/Time</td>
		</tr>
		<?php
		include('connect.php');
		$query = "select * from details where tracking = '".$_GET['id']."'";
  $result = mysqli_query($db,$query);

  $num_results = mysqli_num_rows($result);
  for ($i=0; $i <$num_results; $i++)
  {
     $row = mysqli_fetch_array($result);
		?>	
			
		<tr>
			<td><a href="control-details.php?id=<?php echo $row['tracking']; ?>"><?php echo $row['tracking']; ?></a></td>
			<td><?php echo $row['location']; ?></td>
			<td><?php echo $row['status']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><a href="delete.php?id=<?php echo $row['id']; ?>&return=<?php echo $_SERVER['PHP_SELF']; ?>" onClick="return confirm('Are you sure you want to delete this record?');"><input type="button" value="Delete"></a></td>
		</tr>
		<?php 
  }
		?>
	</table>
	<a href="control.php">Go Back</a>
</div>
</body>
</html>
