<h3>Class and Method</h3>

<?php
class Product {
    public $name; //สมาชิกตัวแปร
    public $price; //สมาชิกตัวแปร

    function _conatruct($name, $price) {  // เมธอดกำหนดค่าเริ่มต้น
        $this->name = $name;  // กำหนดค่าชื่อสินค้า
        $this->price = $price;  // กำหนดค่าราคาสินค้า
    }
    
    function getInfo() {  // เมธอดแสดงข้อมูลสินค้า
        return "Name: " . $this->name . "Price: " . $this->price; // เมธอดแสดงข้อมูลสินค้า
    }
}

$product = new Product('Product 1', 100); // สร้างออบเจ็กต์ใหม่
echo $product->getInfo();  // เรียกใช้เมธอดเพื่อแสดงข้อมูลสินค้า
?>