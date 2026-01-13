<h3>Convert String to Number</h3>

<?php

$string = "12345"; // กำหนดสตริงที่เป็นตัวเลข

$number = (int)$string; // แปลงสตริงเป็นตัวเลขจำนวนเต็ม
$number += 10; 

echo $number; // แสดงผลลัพธ์
?>

<h3>Convert Number to String</h3>
<?php

$number = 12345; // กำหนดตัวเลข

$string = (string)$number; // แปลงตัวเลขเป็นสตริง

echo $string; // แสดงผลลัพธ์
?>