<h3>Form</h3>
<form action="form.php" method="post"> <!-- สร้างฟอร์ม ระบุค่าไปยัง Form.php -->
    <input type="text" name="name" placeholder="name" required> <!-- สร้างช่องกรอกข้อมูล ชื่อ name -->
    <input type="submit" value="Submit"> <!-- สร้างปุ่ม Submit -->
</form>

<?php
if (isset($_POST['name'])) { // ตรวจสอบว่ามีการส่งค่าช่อง name มาหรือไม่
    echo "Name:" . $_POST['name']; // แสดงค่าที่ส่งมาจากช่อง name
}
?>