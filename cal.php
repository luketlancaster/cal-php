<?php
require 'lib/Month.php';



$args = $argv;

if (isset($argv[2])) {
    $year = $argv[2];
    $month = $argv[1];
    $month = new Month($month, $year);
    $message = $month->to_string();
}


echo "$message";
