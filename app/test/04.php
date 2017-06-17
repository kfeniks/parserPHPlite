<?php
            include_once ('../../simple_html_dom.php');
            include_once ('../../curl_query.php');

            header("Content-Type: text/html; charset=utf-8");

            $html = curl_get('http://keccgroup.ru/price');
            $dom = str_get_html($html);


          // Если искать прямо вот все строки с тегом td внутри tr  $prices = $dom->find('tr td');
            $prices = $dom->find('tr');

            foreach ($prices as $price){
                $a= $price->find('td', 2);
              //  echo $price->plaintext;
                //Получаем в колонку цены
                echo $a->plaintext .'<br/>';
            }

            //А теперь выдираем ссылки со страницы + путь к картинке + цена
            $html = curl_get('http://keccgroup.ru/');
            $dom = str_get_html($html);

            $prices = $dom->find('.box');
            foreach ($prices as $price){
                $a= $price->find('a', 0);
                $b = $a->find('img', 0);
                echo $b->src .' ';
                echo $a->href .' ';
                $c = $price->find('b', 0);
                echo $c->plaintext .'<br/>';
               //Безопасно проверяем один шаг, иначе костей не собрать потом
                // break;
            }
