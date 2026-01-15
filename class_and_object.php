<h3>Class and Object</h3>

<?php

//การสร้างคลาส
class Product {
    public $name;
    public $price;
}

//การสร้างวัตถุ    
$product1 = new Product();
$product1->name = "Product 1";
$product1->price = 100;

$product2 = new Product();
$product2->name = "Product 2";
$product2->price = 200;

echo $product1->name; // แสดงผล: Product 1
echo '<br />';
echo $product1->price; // แสดงผล: 100

echo '<br />';
echo $product2->name; // แสดงผล: Product 2
echo '<br />';
echo $product2->price; // แสดงผล: 200
?>