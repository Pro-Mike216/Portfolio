<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "Portfolio";

    // Create database connection
    $connection = new mysqli($servername, $username, $password, $database);

    // Run the delete query
    $sql = "DELETE FROM messages WHERE id = $id";
    $connection->query($sql);
}

// Redirect back to the messages inbox page
header("Location: messages.php");
exit;
?>
