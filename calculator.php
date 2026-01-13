<h3>Calculator + - * / %</h3>
<?php

if (isset($_POST['operator'])) {
    $operator = $_POST['operator']; // รับค่าตัวดำเนินการจากฟอร์ม
    $x = $_POST['x']; // รับค่าตัวเลขตัวที่หนึ่งจากฟอร์ม
    $y =$_POST['y']; // รับค่าตัวเลขตัวที่สองจากฟอร์ม

    if ($operator == "+") { // ตรวจสอบตัวดำเนินการและคำนวณผลลัพธ์
        $result = $x + $y; // บวก
    } elseif ($operator == "-") {
        $result = $x - $y; // ลบ
    } elseif ($operator == "*") {
        $result = $x * $y; // คูณ
    } elseif ($operator == "/") {
        if ($y != 0) { // ตรวจสอบการหารด้วยศูนย์
            $result = $x / $y; // หาร
        } else {
            $result = "Error: Division by zero"; // แจ้งข้อผิดพลาดถ้าหารด้วยศูนย์
        }
    } elseif ($operator == "%") { // หารเอาเศษ
        if ($y != 0) { 
            $result = $x % $y; 
        } else {
            $result = "Error: Division by zero"; 
        }
    } else {
        $result = "Invalid operator"; // แจ้งข้อผิดพลาดถ้าตัวดำเนินการไม่ถูกต้อง
    }

    echo "$x $operator $y = $result"; // แสดงผลลัพธ์
}
?>

<form method="post" action="">
    <input type="number" name="x" required> <!-- ช่องกรอกตัวเลขตัวที่หนึ่ง -->
    <input type="number" name="y" required> <!-- ช่องกรอกตัวเลขตัวที่สอง -->
    <input type="submit" name="operator" value="Calculate"><!-- ปุ่มส่งฟอร์ม -->
    <input type="submit" name="operator" value="+"> <!-- ปุ่มบวก -->
    <input type="submit" name="operator" value="-"> <!-- ปุ่มลบ -->
    <input type="submit" name="operator" value="*"> <!-- ปุ่มคูณ -->
    <input type="submit" name="operator" value="/"> <!-- ปุ่มหาร -->  
    <input type="submit" name="operator" value="%"> <!-- ปุ่มหารเอาเศษ -->
</form>