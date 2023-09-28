<?php

include "functions.php";


var_dump($_REQUEST);

//header("Location: index.php?page=1");

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

header("Location: index.php?page=1");

