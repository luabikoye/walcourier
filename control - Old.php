<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Control Panel</title>
</head>

<body>
<div align="center">
  <h2>Update your Tracking details  </h2>
  <form action="proc_update.php" method="post" enctype="multipart/form-data">
    <table width="496" border="0">
      <tr>
        <td valign="top">Tracking number </td>
        <td><select name="old">
        <option selected="selected" value="">New Tracking</option>
        <?php
include ('connect.php');
$query = "select * from details";
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
        <td><select name="oldName" id="oldName">
          <option selected="selected" value="">New Name</option>
          <?php
include ('connect.php');
$query = "select * from details";
  $result = mysqli_query($db,$query);

  $num_results = mysqli_num_rows($result);
  for ($i=0; $i <$num_results; $i++)
  {
     $row = mysqli_fetch_array($result);?>
          <option value="<?php echo stripslashes($row['name']); ?>"><?php echo stripslashes($row['name']); ?></option>
          <?php
  }
?>
        </select>
          <input name="newName" type="text" id="newName" size="20" /></td>
      </tr>
      <tr>
        <td valign="top">Email </td>
        <td><select name="oldEmail" id="oldEmail">
          <option selected="selected" value="">New Email</option>
          <?php
include ('connect.php');
$query = "select * from details";
  $result = mysqli_query($db,$query);

  $num_results = mysqli_num_rows($result);
  for ($i=0; $i <$num_results; $i++)
  {
     $row = mysqli_fetch_array($result);?>
          <option value="<?php echo stripslashes($row['email']); ?>"><?php echo stripslashes($row['email']); ?></option>
          <?php
  }
?>
        </select>
          <input name="newEmail" type="text" id="newEmail" size="20" /></td>
      </tr>
		
      <tr>
        <td valign="top">Phone </td>
        <td><select name="oldPhone" id="oldPhone">
          <option selected="selected" value="">New Phone</option>
          <?php
include ('connect.php');
$query = "select * from details";
  $result = mysqli_query($db,$query);

  $num_results = mysqli_num_rows($result);
  for ($i=0; $i <$num_results; $i++)
  {
     $row = mysqli_fetch_array($result);?>
          <option value="<?php echo stripslashes($row['phone']); ?>"><?php echo stripslashes($row['phone']); ?></option>
          <?php
  }
?>
        </select>
          <input name="newPhone" type="text" id="newPhone" size="20" placeholder="+2348034" /></td>
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
        <td width="99" valign="top">Date / Time </td>
        <td width="197" valign="top"><input name="date" type="text" id="date" size="20" /></td>
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
</body>
</html>
