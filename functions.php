<?php


function getPage($page): array
{
    switch ($page) {
        case 1:
            $fileName = 'guest.php';
            $title = 'guest';
            break;
        case 2:
            $fileName = 'coordinatePlote.php';
            $title = 'coordinate Plote';
            break;
        case 3:
            $fileName = 'result.php';
            $title = 'Results';
            break;
        default:
            $fileName = 'guest.php';
            $title = 'Home page';
    }

    return [
        'File' => $fileName,
        'Title' => $title
    ];
}


function checkFieldX($r, $x) {
    $radius = $r / 2;
    if ($x <= $radius) {
        return true;
    }

    return false;
}

