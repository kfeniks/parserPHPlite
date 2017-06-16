<?php
            include_once ('../../simple_html_dom.php');
            include_once ('../../curl_query.php');

            header("Content-Type: text/html; charset=utf-8");

            $html = file_get_html('http://keccgroup.ru/price');

                //Save as file .txt
                file_put_contents( 'price_parser.html', $html);
                echo "All is OK";