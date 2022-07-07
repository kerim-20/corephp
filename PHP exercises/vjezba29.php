<?php
class Product{
    public $title;
    public $price;
    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }

    public function info(){
        return "Title: " . $this->title . " . Price: "
        . $this->price . "<br>";
    }
}

$samsung = new Product(' Galaxy Note 20', 3000);
$iphone = new Product(' iPhone 12 pro Max', 3000);
$xiaomi = new Product(' Redmi Note 11 pro', 1500);

echo $samsung->info();
echo $iphone->info();
echo $xiaomi->info();
?>