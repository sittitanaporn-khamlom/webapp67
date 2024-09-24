<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert actor success</title>
</head>
<body>
<?php
    require 'conn.php';
    $sql_update="INSERT INTO actor (aid ,aname ,alastname ,aaddress ,aage) 
    VALUES ('$_POST[aid]','$_POST[aname]','$_POST[alastname]' ,'$_POST[aaddress]' ,'$_POST[aage]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Insert Success <br>";
    header("refresh: 1; url=actormenu.php");
    }

?> 

</body>
</html>