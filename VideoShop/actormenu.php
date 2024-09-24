<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actors</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql = "SELECT * FROM actor";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
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
                    <th>Edit</th>
                    <th>Delete</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>"
                            .$row["aid"]."</td>"
                            ."<td>".$row["aname"]."</td>"
                            ."<td>".$row["alastname"]."</td>"
                            ."<td>".$row["aaddress"]."</td>"
                            ."<td>".$row["aage"]."</td>"
                            ."<td>"
                            ."<a href='editact.php?aid=".$row["aid"]."'><button> Edit </button></a>"."</td>"
                            ."<td>"."<a href='actdelete.php?aid=".$row["aid"]."' onclick=\"return confirm('Are you sure you want to delete this actor?');\"><button>Delete</button></a>"
                            ."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <br>
        <a href='insertact.php'><button> Insert </button></a>
        <a href='home.php'><button> Home </button></a>
</body>
</html>
