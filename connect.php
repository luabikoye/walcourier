<?php
@ $db = mysqli_connect('localhost', 'mccljxii_ijoba', 'certification231','mccljxii_ijoba');

  if (!$db)
  {
     echo 'Error: Could not connect to host server.  Please try again later.';
     exit;
  }



/*@ $db = mysql_pconnect('localhost', 'gxxieedd_mydb', 'certification231');

  if (!$db)
  {
     echo 'Error: Could not connect to host server.  Please try again later.';
     exit;
  }

  $mysql = mysql_select_db('gxxieedd_mydb');
    if (!$mysql)
  {
     echo 'Error: Could not Select database.  Please try again later.';
     exit;
  }*/


function c_date($date,$return)
{
	$sdate = strtotime($date);
	
	return date($return,$sdate);
}
?>