<?php
            include_once ('../../simple_html_dom.php');

            header("Content-Type: text/html; charset=utf-8");

            $html = file_get_html('http://keccgroup.ru/price');

        // Find all price
        foreach($html->find('tr') as $element)
            echo $element->find('td', 2) . '<br>';