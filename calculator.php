<h3>Calculator + - * / %</h3>

<?php

if (isset($_POST["operator"])) {   //ตรวจสอบว่ามีการกดปุ่มตัวดำเนินการหรือไม่
    $operator = $_POST["operator"];  //รับค่าตัวดำเนินการ
    $x = $_POST['x'];  //รับค่าตัวเลข
    $y = $_POST['y'];  //รับค่าตัวเลข

    if ($operator == "+") {
        $result = $x + $y;   //บวก
    } else if ($operator == "-") {
        $result = $x - $y;   //ลบ
    } else if ($operator == "*") {
        $result = $x * $y;   //คูณ
    } else if ($operator == "/") {
            $result = $x / $y;   //หาร
    } else if  ($operator == "%") {
            $result = $x % $y;  //หารเอาเศษ
    } 

    echo "$x $operator $y = $result";  //แสดงผลลัพธ์
}
?>

<form method="post">
    <input type="number" name="x" placeholder="x"> <!--รับค่าตัวเลข-->
    <input type="number" name="y" placeholder="y"> <!--รับค่าตัวเลข-->
    <input type="submit" name="operator" value="+"> <!--ปุ่มบวก-->
    <input type="submit" name="operator" value="-"> <!--ปุ่มลบ-->
    <input type="submit" name="operator" value="*">   <!--ปุ่มคูณ-->
    <input type="submit" name="operator" value="/">  <!--ปุ่มหาร-->
    <input type="submit" name="operator" value="%">  <!--ปุ่มหารเอาเศษ-->
</form>