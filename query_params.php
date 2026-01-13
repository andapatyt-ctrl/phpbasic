<h3>Query Params</h3>
<?php
if (isset($_GET['name'])) { // ตรวจสอบว่ามีการส่งค่าช่อง name มาหรือไม่
echo $_GET ['name']; // แสดงค่าที่ส่งมาจาก URL query parameter ชื่อ name
}