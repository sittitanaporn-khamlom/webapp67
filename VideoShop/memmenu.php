<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Menu VDO SHOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require 'conn.php';

    // ดึงข้อมูลสมาชิกจากตาราง member
    $sql = "SELECT * FROM member"; 
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Error: " . $conn->error);
    }
?>

<h1>Members</h1><br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>ที่อยู่</th>
            <th>เบอร์โทร</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>"
                        . $row["mid"] . "</td>"
                        . "<td>" . $row["mname"] . "</td>"
                        . "<td>" . $row["mlastname"] . "</td>"
                        . "<td>" . $row["maddress"] . "</td>"
                        . "<td>" . $row["mtel"] . "</td>"
                        . "<td><a href='editmem.php?mid=" . $row["mid"] . "'><button>Edit</button></a></td>"
                        . "<td><a href='delete.php?mid=" . $row["mid"] . "' onclick=\"return confirm('Are you sure you want to delete this member?');\"><button>Delete</button></a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>0 results</td></tr>";
            }
            $conn->close();
        ?>
    </tbody>
</table>
<br>
<a href='insertmem.php'><button>Insert</button></a>
<a href='home.php'><button>Home</button></a>
<a href='order.php'><button>Order</button></a>
<a href='historybuy.php'><button>Historybuy</button></a>
</body>
</html>
