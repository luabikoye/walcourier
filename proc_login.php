<?php
@ $name = $_POST['username'];
@ $password = $_POST['password'];
   if($name == 'walcourierexp' and $password == 'Ijoba123!')
            {
			include('control.php');
		}
else
	{
	include('admin.php');
	}
?>