<div>If Else</div>
<?php

$x = 10;

if ($x > 0) {
    echo "Positive"; // ถ้า มากกว่า 0 ให้แสดง Positive
} else {
    echo "Negative"; // ถ้าไม่ใช่ ให้แสดง Negative
}
?>

<div>Switch</div>
<?php

switch ($x) {
    case 1:
        echo "One"; // ถ้า $x เท่ากับ 1 ให้แสดง One
        break;
    case 2:
        echo "Two"; // ถ้า $x เท่ากับ 2 ให้แสดง Two
        break;
    case 3:
        echo "Three"; // ถ้า $x เท่ากับ 3 ให้แสดง Three
        break;
    default:
        echo "Unknown"; // ถ้าไม่ตรงกับกรณีใดๆ ให้แสดง Other
        break;
}