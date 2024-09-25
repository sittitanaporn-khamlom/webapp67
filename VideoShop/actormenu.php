<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require 'conn.php';

    // Query to join actor and product tables
    $sql = "
        SELECT actor.*, product.pname 
        FROM actor 
        LEFT JOIN product ON actor.pid = product.pid
    ";
    
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->connect_error);
    }
?>

<h1>Actors</h1><br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>บ้านเกิด</th>
            <th>อายุ</th>
            <th>หนังที่แสดง</th> <!-- New column for product name -->
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php // show data by fetch from database
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>"
                        . $row["aid"] . "</td>"
                        . "<td>" . $row["aname"] . "</td>"
                        . "<td>" . $row["alastname"] . "</td>"
                        . "<td>" . $row["aaddress"] . "</td>"
                        . "<td>" . $row["aage"] . "</td>"
                        . "<td>" . ($row["pname"] ? $row["pname"] : "ยังไม่ได้เลือก") . "</td>" // Display product name
                        . "<td><a href='editact.php?aid=" . $row["aid"] . "'><button>Edit</button></a></td>"
                        . "<td><a href='actdelete.php?aid=" . $row["aid"] . "' onclick=\"return confirm('Are you sure you want to delete this actor?');\"><button>Delete</button></a></td>";
                    echo "</tr>";    
                }
            } else {
                echo "<tr><td colspan='8'>0 results</td></tr>";
            }
            $conn->close();
        ?>
    </tbody>
</table>
<br>
<a href='insertact.php'><button>Insert</button></a>
<a href='home.php'><button>Home</button></a>
</body>
</html>
