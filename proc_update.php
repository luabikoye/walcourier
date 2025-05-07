<html>
<head>
  <title>Updated</title>
</head>
<body>
<h1>Data Updated </h1>
<?php
include('connect.php');
	    // create short variable names
		
  $old=$_POST['old'];
  $new=$_POST['new'];
	
  if(!$old)	
  {
  $tracking = $new;
	  $mail_message = 'This is to inform you that you have a packega with us to This package is from <b>'.$newName.'</b>. Visit: <a href="http://walcourier.com">www.walcourier.com</a> and login with the tracking number above to see the current location of your package.';
  }
  else
  {
  $tracking=$old;
	  $mail_message = 'This is to inform you that there has been a change in status of your package. Visit: <a href="http://walcourier.com">www.walcourier.com</a> and login with the tracking number above to see the current location of your package.';
  }
  
 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $from=$_POST['from'];
  $destination=$_POST['destination'];
  $expected_date=$_POST['expected_date'];
  $expected_time=$_POST['expected_time'];
  $delivery_date=$_POST['delivery_date'];
  $date=$_POST['date'];
  $location=$_POST['location'];
  $status=$_POST['status'];

 

  $query = "insert into details (tracking, name, email, phone, fromN, destination, expected_date, expected_time, delivery_date, date, location, status) values 
            ('".$tracking."', '".$name."', '".$email."', '".$phone."', '".$from."', '".$destination."', '".$expected_date."', '".$expected_time."', '".$delivery_date."', '".$date."', '".$location."', '".$status."')"; 

	
  $result = mysqli_query($db,$query);
  if ($result)

  {
	  
	  //Send email and sms to customer
	  $toaddress = $email;
	  $subject= 'Update on your Package (#'.$tracking.')';
  $mailcontent = '<html><head>
<script language="JavaScript" type="text/JavaScript">
<!--
function openOB() {
  oldpopup=window.open("member-login.htm?pagename=GlbLogonNewDesignPB&amp;usertype=pbuser","","scrollbars=1, menubar=0,location=0,toolbar=0,personalbar=0,status=1,width=800,height=547,resizable=yes");
}

function openNW() {
  oldpopup=window.open("createaccount.php?pagename=GlbLogonNewDesignPB&amp;usertype=pbuser","","scrollbars=1, menubar=0,location=0,toolbar=0,personalbar=0,status=1,width=800,height=547,resizable=yes");
}
-->
</script>
<script language="JavaScript" type="text/JavaScript">
<!--
function openOB() {
  oldpopup=window.open("member-login.htm?pagename=GlbLogonNewDesignPB&amp;usertype=pbuser","","scrollbars=1, menubar=0,location=0,toolbar=0,personalbar=0,status=1,width=800,height=547,resizable=yes");
}

function openNW() {
  oldpopup=window.open("createaccount.php?pagename=GlbLogonNewDesignPB&amp;usertype=pbuser","","scrollbars=1, menubar=0,location=0,toolbar=0,personalbar=0,status=1,width=800,height=547,resizable=yes");
}
-->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<P>
Dear  '.strtoupper($name).' <br><br>
<b><u>PROGRESS REPORT ON PACKAGE: '.$tracking.'</u></b><br><br>
'.$mail_message.'<br><br><br>
 
Thank you for choosing WAL Courier Express Company<br>
</body>
</html>';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
// More headers
$headers .= "From: update@blueraysecurity" . "\r\n";

mail($toaddress, $subject, $mailcontent, $headers); 
	  
	  
	  $userfile = $_FILES['userfile']['tmp_name'];

  // $userfile_name is original file name
  $userfile_name = $_FILES['userfile']['name'];

  // $userfile_size is size in bytes
  $userfile_size = $_FILES['userfile']['size'];

  // $userfile_type is mime type e.g. image/gif
  $userfile_type = $_FILES['userfile']['type'];

  // $userfile_error is any error encountered
  $userfile_error = $_FILES['userfile']['error'];
// userfile_error was introduced at PHP 4.2.0
// use this code with newer versions


  $upfile = 'uploads/'.$tracking.'.jpg';
  

// is_uploaded_file and move_uploaded_file added at version 4.0.3
is_uploaded_file($userfile);

move_uploaded_file($userfile, $upfile);
	  echo  mysql_affected_rows().' information inserted into database. - <a href="control.php">Go Back</a>'; 
  }
?>

</body>
</html>
