<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
</head>
<body>
<?php
require 'conn.php';

// รับค่า mid และ pid จาก POST
$mid = $_POST['mid'];
$pids = $_POST['pid']; // array ของ pid

if (!empty($pids) && !empty($mid)) {
    foreach ($pids as $pid) {
        // SQL statement สำหรับเพิ่มข้อมูลการซื้อ
        $sql_insert = "INSERT INTO mem_product (mid, pid) VALUES ('$mid', '$pid')";
        $result = $conn->query($sql_insert);
        
        if (!$result) {
            die("Error: " . $conn->error);
        }
    }
    echo "Order Success! <br>";
} else {
    echo "Please select at least one movie and provide a valid member ID.<br>";
}

header("refresh: 1; url=historybuy.php"); // เปลี่ยนไปที่หน้า order
$conn->close();
?>
</body>
</html>
