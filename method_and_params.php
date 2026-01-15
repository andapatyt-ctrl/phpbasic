<h3>Method and Parameters</h3>

<?php
class Product {
    function getInfo($name, $price) {  // เมธอดแสดงข้อมูลสินค้าโดยมีพารามิเตอร์
        return "Name: " . $name . " Price: " . $price; // เมธอดแสดงข้อมูลสินค้า
    }
}

$product = new Product(); // สร้างออบเจ็กต์ใหม่
echo $product->getInfo('Product 1', 100);  // เรียกใช้เมธอดโดยส่งพารามิเตอร์เพื่อแสดงข้อมูลสินค้า