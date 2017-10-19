<?php
declare(strict_types = 1);

class Smartphone implements ICall, IBrowsing
{

    public function Browsing(string $url)
    {
        if (preg_match('/[0-9]/', $url)){
           echo('Invalid URL!' . "\r\n");
        }else{
        echo "Browsing: $url!" . "\r\n";}
    }

    public function Calling(string $number)
    {
        if (!is_numeric($number)){
            echo ('Invalid number!' . "\r\n");
        }
        echo "Calling ... $number" . "\r\n";
    }
}