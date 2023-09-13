<?php

include "functions.php";

$R = array(1,2,3,4,5);
$X = array(-5,-4,-3,-2,-1,0,1,2,3);
$Y = array(-5,-4,-3,-2,-1,0,1,2,3,4,5);


if(checkFieldX($_POST['changeR'],$_POST['button']) & checkFieldY($_POST['changeR'],$_POST['fieldY'])) {
    $flag = true;
} else {
    $flag = false;
}


if (in_array($_POST['button'], $X)) {
    if (in_array($_POST['fieldY'], $Y)) {
        if (in_array($_POST['changeR'], $R)) {
            $time = date("H:i:s");
            header("Location: index.php?page=3&x={$_POST['button']}&y={$_POST['fieldY']}&r={$_POST['changeR']}&time={$time}&flag={$flag}");
            exit();
        }
    }
}


