<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Control Panel</title>
	
	<script src="jquery.js"></script>
	
<script language="javascript">
	
$(function() {

$("#oldTracking").change(function(){   

var id = $('select#oldTracking option:selected').val();
	
$.ajax({
type: "POST",
url: "getname.php",
data: {tracking:id},
success: function(response){
$("#name").val(response);

} }); 
	
$.ajax({
type: "POST",
url: "getemail.php",
data: {tracking:id},
success: function(response){
$("#email").val(response);

} }); 
	
	
$.ajax({
type: "POST",
url: "getphone.php",
data: {tracking:id},
success: function(response){
$("#phone").val(response);

} }); 
	
	
$.ajax({
type: "POST",
url: "getfrom.php",
data: {tracking:id},
success: function(response){
$("#from").val(response);

} }); 
	
	
$.ajax({
type: "POST",
url: "getexpected.php",
data: {tracking:id},
success: function(response){
$("#expected_date").val(response);

} }); 
	
	
$.ajax({
type: "POST",
url: "gettime.php",
data: {tracking:id},
success: function(response){
$("#expected_time").val(response);

} }); 
	
	
$.ajax({
type: "POST",
url: "getdelivery.php",
data: {tracking:id},
success: function(response){
$("#delivery_date").val(response);

} }); 
	
	
$.ajax({
type: "POST",
url: "getdestination.php",
data: {tracking:id},
success: function(response){
$("#destination").val(response);

} }); 
	
	
});        
});
</script>
</head>

<body>
<div align="center">
  <h2>Update your Tracking details  </h2>
  <form action="proc_update.php" method="post" enctype="multipart/form-data">
    <table width="496" border="0">
      <tr>
        <td valign="top">Tracking number </td>
        <td><select name="old" id="oldTracking">
        <option selected="selected" value="">New Tracking</option>
        <?php
include ('connect.php');
$query = "select distinct tracking from details";
  $result = mysqli_query($db,$query);

  $num_results = mysqli_num_rows($result);
  for ($i=0; $i <$num_results; $i++)
  {
     $row = mysqli_fetch_array($result);?>
        <option value="<?php echo stripslashes($row['tracking']); ?>"><?php echo stripslashes($row['tracking']); ?></option>
        <?php
  }
?>
        </select><input name="new" type="text" id="new" size="20" /></td>
      </tr>
      <tr>
        <td valign="top">Name on Package </td>
        <td><input name="name" type="text" id="name" size="20" /></td>
      </tr>
      <tr>
        <td valign="top">Email </td>
        <td><input name="email" type="text" id="email" size="20" /></td>
      </tr>
		
      <tr>
        <td valign="top">Phone </td>
        <td><input name="phone" type="text" id="phone" size="20" placeholder="+2348034" /></td>
      </tr>
      <tr>
        <td valign="top">From</td>
        <td><textarea name="from" cols="30" id="from"></textarea></td>
      </tr>
      <tr>
        <td valign="top">Destination</td>
        <td><textarea name="destination" cols="30" id="destination"></textarea></td>
      </tr>
      <tr>
        <td valign="top">Expected Date</td>
        <td><input name="expected_date" type="date" id="expected_date" size="20" placeholder="YYYY-MM-DD" /></td>
      </tr>
      <tr>
        <td valign="top">Expected Time</td>
        <td><input name="expected_time" type="text" id="expected_time" size="20" placeholder="8:00am" /></td>
      </tr>
      <tr>
        <td valign="top">Delivery Date</td>
        <td><input name="delivery_date" type="text" id="delivery_date" size="20" placeholder="Monday 12th 2018. 8:00am" /></td>
      </tr>
	        <tr>
        <td width="99" valign="top">&nbsp;</td>
        <td width="197" valign="top"><h2>Update current status  </h2></td>
      </tr>
		
		<tr>
        <td width="99" valign="top">Date / Time </td>
        <td width="197" valign="top"><input name="date" type="text" id="date" size="20" placeholder="Monday 12th 2018. 8:00am" /></td>
      </tr>
		
      <tr>
        <td valign="top">Location</td>
        <td><textarea name="location" cols="30" id="location"></textarea>
            <br /></td>
      </tr>
      <tr>
        <td valign="top">Status</td>
        <td><textarea name="status" cols="30" id="status"></textarea>
            <br /></td>
      </tr>
      <tr>
        <td valign="top">Upload Image / Passport</td>
        <td><input type="file" name="userfile"></textarea>
            <br /></td>
      </tr>


      <tr>
        <td colspan="2"><input name="submit" type="submit" value="Register" /></td>
      </tr>
    </table>
  </form>
</div>

<div align="center">
	<br><br>
  <h2>List of Tracking Records </h2>
	<table border="1" width="50%">
		<tr>
			<td>Tracking No</td>
			<td>Name</td>
			<td>Action</td>
		</tr>
		<?php
		$query = "select distinct tracking, name from details";
  $result = mysqli_query($db,$query);

  $num_results = mysqli_num_rows($result);
  for ($i=0; $i <$num_results; $i++)
  {
     $row = mysqli_fetch_array($result);
		?>	
			
		<tr>
			<td><a href="control-details.php?id=<?php echo $row['tracking']; ?>"><?php echo $row['tracking']; ?></a></td>
			<td><?php echo $row['name']; ?></td>
			<td><a href="delete.php?tracking=<?php echo $row['tracking']; ?>&return=<?php echo $_SERVER['PHP_SELF']; ?>" onClick="return confirm('Are you sure you want to delete this record?');"><input type="button" value="Delete"></a></td>
		</tr>
		<?php 
  }
		?>
	</table>
	
</div>
</body>
</html>
