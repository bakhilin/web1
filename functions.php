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
    $radius = (float)$r / 2;
    if($radius >=0) {
        if((float)$x >=0 ) {
            if((float)$x <= $radius) {
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
    if ((float)$y < 0) {
        if((float)$y >= ((float)$r* (-1))) {
            return true;
        } else {
            return false;
        }
    } else {
        if((float)$y <= (floatgit )$r) {
            return true;
        } 
        return false;
    }
}


