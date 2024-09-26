<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Movies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Order Movies</h1><br>
<form method="post" action="ordersuccess.php">

    <p>
        <label>ID สมาชิก</label>
        <input type="text" name="mid" id="mid" required>
    </p>

    <p>
        <label>หนังที่ต้องการซื้อ</label><br>
        <?php
            require 'conn.php'; // เชื่อมต่อฐานข้อมูล
            $sql = "SELECT pid, pname FROM product"; // ดึง pid และ pname
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<input type='checkbox' name='pid[]' value='" . $row['pid'] . "'> " . $row['pname'] . "<br>";
                }
            } else {
                echo "<p>ยังไม่มีผลิตภัณฑ์</p>";
            }
            $conn->close();
        ?>
    </p>

    <p>
        <input type="submit" value="สั่งซื้อ" class="submit">
        <a href='memmenu.php' class="back-button"><button type="button">ย้อนกลับ</button></a>
    </p>
</form>
</body>
</html>
