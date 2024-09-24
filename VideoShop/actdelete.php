<?php
require 'conn.php';

if (isset($_GET['aid'])) {
    $aid = $_GET['aid'];

    // Prepare and execute the delete statement
    $sql = "DELETE FROM actor WHERE aid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $aid);

    if ($stmt->execute()) {
        // Redirect back to main menu after deletion
        header("Location: actormenu.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
$conn->close();
?>
