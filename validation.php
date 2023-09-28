<?php

include "functions.php";

//$R = array(1, 2, 3, 4, 5);
//$X = array(-5, -4, -3, -2, -1, 0, 1, 2, 3);
//$Y = array(-5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5);

var_dump($_REQUEST);

if (checkFieldX($_POST['changeR'], $_POST['x']) & checkFieldY($_POST['changeR'], $_POST['fieldY'])) {
    $flag = true;
} else {
    $flag = false;
}

$microTime = microtime();

if ($_POST['x'] >= -5 and $_POST['x'] <= 3) {
    if ($_POST['fieldY'] >=-5 and $_POST['fieldY'] <= 5) {
        if ($_POST['changeR'] >= 1 and $_POST['changeR'] <=5) {
            $time = date("H:i:s");
            header("Location: index.php?page=1&x={$_POST['x']}&y={$_POST['fieldY']}&r={$_POST['changeR']}&time={$time}&flag={$flag}&timeScript={$microTime}");
        } else {
            header("Location: index.php?page=1");
        }
    } else {
        header("Location: index.php?page=1");
    }
} else {
    header("Location: index.php?page=1");
}
exit();


