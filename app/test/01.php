<?php
            include_once ('../../simple_html_dom.php');
            include_once ('../../curl_query.php');

$html = file_get_html('http://keccgroup.ru/');

// Find all images
foreach($html->find('img') as $element)
    echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
    echo $element->href . '<br>';