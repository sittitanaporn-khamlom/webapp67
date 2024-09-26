<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Success</title>
</head>
<body>
<?php
            require 'conn.php';
$sql_update="UPDATE member SET mname='$_POST[mname]',mlastname='$_POST[mlastname]' ,maddress='$_POST[maddress]' ,mtel='$_POST[mtel]' WHERE  ='$_POST[mid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=memmenu.php");
            }

        ?>

</body>
</html>