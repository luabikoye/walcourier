<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

if($_SERVER['HTTP_HOST'] != 'localhost:8888')
{
  @ $db = mysqli_connect('wal-db.c3w2g26cei13.eu-north-1.rds.amazonaws.com', 'wal_db', 'Aledoy101','wal_db');

  if (!$db)
  {
     echo 'Error: Could not connect to host server.  Please try again later.';
     exit;
  }

}else
{
@ $db = mysqli_connect('localhost', 'mccljxii_ijoba', 'certification231','mccljxii_ijoba');

  if (!$db)
  {
     echo 'Error: Could not connect to host server.  Please try again later.';
     exit;
  }
}


function c_date($date,$return)
{
	$sdate = strtotime($date);
	
	return date($return,$sdate);
}
?>