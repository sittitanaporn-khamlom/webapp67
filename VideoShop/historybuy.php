<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History of Purchases</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require 'conn.php';

    // JOIN member และ product ผ่านตารางเชื่อม member_product
    $sql = "SELECT m.mname, m.mlastname, p.pname, mp.mid, mp.pid FROM member m 
            LEFT JOIN mem_product mp ON m.mid = mp.mid 
            LEFT JOIN product p ON mp.pid = p.pid";
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Error: " . $conn->error);
    }
?>

<h1>Purchase History</h1><br>
<table>
    <thead>
        <tr>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>หนังที่ซื้อ</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>"
                        . $row["mname"] . "</td>"
                        . "<td>" . $row["mlastname"] . "</td>"
                        . "<td>" . ($row["pname"] ? $row["pname"] : 'ไม่มีหนังที่ซื้อ') . "</td>"
                        . "<td><a href='hisdelete.php?mid=" . $row["mid"] . "&pid=" . $row["pid"] . "' onclick=\"return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบหนังนี้?');\"><button>Delete</button></a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>0 results</td></tr>";
            }
            $conn->close();
        ?>
    </tbody>
</table>
<br>
<a href='memmenu.php'><button>ย้อนกลับ</button></a>
</body>
</html>
