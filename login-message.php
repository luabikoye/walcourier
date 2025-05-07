<?php

$toaddress = $row['email'];
 $subject= 'You just logged in to view package (#'.$tracking.')';
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


// $sms_message= 'Dear '.$name.', You have just logged in to track your package with number: '.$tracking;
// $msg = str_replace(' ','+',$sms_message);

// $telephone = str_replace(' ','',$phone);
// $telephone = str_replace('+','',$telephone);
// $tel = str_replace('-','',$telephone);

// $url = "https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=x5xJTyRp0COZ23l3NtXLricfZjbKN1RYjDJbe6w28vcMX3rB4lAuIVZPHOhm&from=BlueRay&to=$tel&body=$msg";

// $f = @fopen($url, "r");
// $answer = fgets($f, 255);

?>
