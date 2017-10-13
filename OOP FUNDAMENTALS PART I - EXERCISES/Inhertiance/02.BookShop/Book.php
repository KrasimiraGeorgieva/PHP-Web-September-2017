<?php
declare(strict_types=1);

class Book
{
    private $title;
    private $author;
    private $price;
    public function __construct(string $title, string $author,float $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }
    public function getTitle():string
    {
        return $this->title;
    }
    protected function setTitle($title)
    {
        if(strlen($title) < 3){
            throw new Exception("Title not valid!");
        }
        $this->title = $title;
    }
    public function getAuthor():string
    {
        return $this->author;
    }
    protected function setAuthor($author)
    {
        $name=explode(" ",$author);
        if(is_numeric($name[1][0])){
            throw new Exception("Author not valid!");
        }
        $this->author = $author;
    }
    public function getPrice():float
    {
        return $this->price;
    }
    protected function setPrice($price)
    {
        if($price <= 0){
            throw new Exception("Price not valid!");
        }
        $this->price = $price;
    }
    function __toString()
    {
        return "{$this->title} {$this->author} {$this->price} \r\n";
    }

}