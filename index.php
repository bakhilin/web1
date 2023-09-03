<?php

require_once 'functions.php';

if (!empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '1';
}

$info = getPage($page);
$fileName = $info['File'];
$title = $info['Title'];

ob_start();
include 'styles.php';
$styles = ob_get_clean();
ob_start();
include 'blocks/header.html';
$header = ob_get_clean();
ob_start();
include "pages/$fileName";
$content = ob_get_clean();
ob_start();
include 'blocks/footer.html';
$footer = ob_get_clean();

$html = file_get_contents('main.html');
$html = str_replace('{{STYLES}}', $styles, $html);
$html = str_replace('{{TITLE}}', $title, $html);
$html = str_replace('{{HEADER}}', $header, $html);
$html = str_replace('{{CONTENT}}', $content, $html);
$html = str_replace('{{FOOTER}}', $footer, $html);

echo $html;
