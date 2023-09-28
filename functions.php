<?php


function getPage($page): array
{
    switch ($page) {
        case 1:
            $fileName = 'coordinatePlote.php';
            $title = 'Home page';
            break;
        case 2:
            $fileName = 'result.php';
            $title = 'Results';
            break;
        default:
            $fileName = 'coordinatePlote.php';
            $title = 'Home page';
    }

    return [
        'File' => $fileName,
        'Title' => $title
    ];
}


function checkFieldX($r, $x) {
    $radius = (int)$r / 2;
    if($radius >=0) {
        if((int)$x >=0 ) {
            if((int)$x <= $radius) {
                return true;
            } else {
                return false;
            }
        } else {
            $radius = $radius * (-1);
            if($radius <= (float)$x) {
                return true;
            } 

            return false;
        }
    } 
    
    return false;
}

function checkFieldY($r, $y) {
    if ((int)$y < 0) {
        if((int)$y >= ((int)$r* (-1))) {
            return true;
        } else {
            return false;
        }
    } else {
        if((int)$y <= (int)$r) {
            return true;
        } 
        return false;
    }
}


