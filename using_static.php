<h3>Using Static</h3>

<?php

class Product {
    public static $name = "Product";

    public static function getInfo() {
        return self :: $name;
    }
}

echo Product::getInfo();
echo "<br>";

$product = new Product();
echo $product->getInfo();
?>