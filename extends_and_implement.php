<h3>Extends and Implement</h3>
 
<?php
interface ProductInterface {
    public function getInfo();  // ประกาศเมธอดในอินเทอร์เฟซ
}

class ParentClass {
    public function getInfo() {
        return "Parent class";
    }
}

class Product extends ParentClass implements ProductInterface {
    public function getInfo() {  // การโอเวอร์ไรด์เมธอดจากคลาสแม่และนิยามเมธอดจากอินเทอร์เฟซ
        return "Product "; // เมธอดแสดงข้อมูลสินค้า
    }
}

$product = new Product(); // สร้างออบเจ็กต์ใหม่
echo $product->getInfo();  // เรียกใช้เมธอดเพื่อแสดง