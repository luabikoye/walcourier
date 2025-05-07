<?php

$sms_message= 'Dear '.$name.', You have a package with us. Visit www.walcourierexp.com and check the status Tracking number: '.$tracking;
$msg = str_replace(' ','+',$sms_message);

$telephone = str_replace(' ','',$phone);
$telephone = str_replace('+','',$telephone);
$tel = str_replace('-','',$telephone);

$url = "https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=x5xJTyRp0COZ23l3NtXLricfZjbKN1RYjDJbe6w28vcMX3rB4lAuIVZPHOhm&from=BlueRay&to=$tel&body=$msg";
$f = @fopen($url, "r");
$answer = fgets($f, 255);
/*if (substr($answer, 0, 2) == "1701")
{
echo "SMS was successful.";
}
else
{
echo "SMS error";
}*/
?>