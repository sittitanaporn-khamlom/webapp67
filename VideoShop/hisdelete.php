<?php
require 'conn.php';

// ตรวจสอบว่ามีการส่ง 'mid' และ 'pid' มาหรือไม่
if (isset($_GET['mid']) && isset($_GET['pid'])) {
    $mid = $_GET['mid'];
    $pid = $_GET['pid'];

    // เริ่มต้นการทำธุรกรรม
    $conn->begin_transaction();

    try {
        // เตรียมและรันคำสั่งลบจาก mem_product
        $sql = "DELETE FROM mem_product WHERE mid = ? AND pid = ?";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("ii", $mid, $pid);
            $stmt->execute();
            
            // ตรวจสอบว่ามีแถวที่ถูกลบ
            if ($stmt->affected_rows > 0) {
                // Commit การทำธุรกรรม
                $conn->commit();
                // Redirect กลับไปที่ historybuy.php หลังจากลบสำเร็จ
                header("Location: historybuy.php");
                exit();
            } else {
                throw new Exception("No record found to delete.");
            }

            $stmt->close(); // ปิด statement
        } else {
            throw new Exception("Error preparing statement for mem_product: " . $conn->error);
        }
    } catch (Exception $e) {
        // Rollback ถ้ามีข้อผิดพลาด
        $conn->rollback();
        echo "เกิดข้อผิดพลาด: " . $e->getMessage();
    }
} else {
    echo "No member ID or product ID provided.";
}

$conn->close(); // ปิดการเชื่อมต่อฐานข้อมูล
?>
