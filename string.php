<?php 
$name = "John";
?>

<h3>String Functions</h3> 
<div>Count :<?php echo strlen($name); ?></div>
<div>Index of : <?php echo strpos($name, "o"); ?></div> <!-- หาตำแหน่งของตัวแปร "o" -->
<div>Upper Case : <?php echo strtoupper($name); ?></div> <!-- แปลงเป็นตัวพิมพ์ใหญ่ทั้งหมด -->
<div>Lower Case : <?php echo strtolower($name); ?></div> <!-- แปลงเป็นตัวพิมพ์เล็กทั้งหมด -->
<div>Replace : <?php echo str_replace("John", "Jane", $name); ?></div> <!-- แทนที่คำว่า John เป็น Jane -->
<div>Substring : <?php echo substr($name, 0, 3); ?></div> <!-- ตัดเอาเฉพาะตัวอักษร 3 ตัวแรก -->