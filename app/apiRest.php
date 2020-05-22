<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://miescuela.com/alumnos");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
$res2 = file_get_contents("http://miescuela.com/alumnos");
curl_close($ch);
?>