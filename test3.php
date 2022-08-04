<?php

$test = date('Y/m/d H:i:s');

echo $test;

$msg = 'Hello World';
echo $msg;

$date = new DateTime();
$date1 = $date->modify('5 hour')->format('Y-m-d H:i:s');
echo $date1;
?>