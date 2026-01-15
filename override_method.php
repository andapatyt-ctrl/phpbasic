<h3>Override Method</h3>

<?php
class ParentClass {
    public function getInfo() {
        return "Parent class";
    }
}

class Product extends ParentClass {
    public function getInfo() {  // การโอเวอร์ไรด์เมธอดจากคลาสแม่
        return "Product class"; // เมธอดแสดงข้อมูลสินค้า
    }
}

$product = new Product(); // สร้างออบเจ็กต์ใหม่
echo $product->getInfo();  // เรียกใช้เมธอดเพื่อแสดงข้อมูลสินค้า