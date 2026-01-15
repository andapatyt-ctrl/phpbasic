<h3>Interface</h3>

<?php
interface ProductInterface {
    public function getInfo();  // ประกาศเมธอดในอินเทอร์เฟซ
}
class Product implements ProductInterface {
    public function getInfo() {  // นิยามเมธอดจากอินเทอร์เฟซ
        return "product."; // เมธอดแสดงข้อมูลสินค้า
    }
}

$product = new Product(); // สร้างออบเจ็กต์ใหม่
echo $product->getInfo();  // เรียกใช้เมธอดเพื่อแสดงข้อมูลสินค้า
?>