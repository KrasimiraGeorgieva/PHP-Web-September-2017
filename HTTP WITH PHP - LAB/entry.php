<?php
var_dump(php_sapi_name());// -> връща инфо дали си в уеб или не си. Интерпретатора взима решение какво да прави.
//Ако се пусне през конзолата е php_sapi_name: string(3) "cli" - което означава command line interface
// Същото нещо ако се отвори през браузера с включен xampp през apache е: apache2handler

//var_dump($_GET);
//var_dump($_POST);
//var_dump($_SERVER);
//var_dump($_REQUEST);
//var_dump($_COOKIE);
//
//echo move_uploaded_file($_FILES['myfile']['tmp_name'],__DIR__ . '/images/cafe.jpg');