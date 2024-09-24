<?php
require 'conn.php';

if (isset($_GET['mid'])) {
    $mid = $_GET['mid'];

    // Prepare and execute the delete statement
    $sql = "DELETE FROM member WHERE mid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $mid);

    if ($stmt->execute()) {
        // Redirect back to main menu after deletion
        header("Location: memmenu.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
$conn->close();
?>
