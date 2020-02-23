<?php

foreach (glob("Finders/*.php") as $filename)
{
    include $filename;
}
require_once('adapter.php'); 
$myarr = include 'words.php';

function printarr ($arrs) {
    
    foreach ($GLOBALS["myarr"] as $word) {
    if (in_array($word, $arrs->ultimateArr())) {
        echo '<pre>';
        echo $word . " TRUE";
        echo '<pre>';
    }
    else {
        echo '<pre>';
        echo $word . " FALSE";
        echo '<pre>';
    }
    }
}

printarr ($adapter);