<h3>List Files</h3>

<?php

$array = scandir("."); //อ่านไฟล์ในโฟลเดอร์ปัจจุบันทั้งหมด
?>

<ul>
    <?php 
    foreach ($array as $item) { // วนลูปแสดงชื่อไฟล์
        echo "<li>$item</li>"; // แสดงชื่อไฟล์ในแท็ก li
    }
    ?>
</ul>