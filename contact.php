<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 1. Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "Portfolio"; // You can keep it in myshop or use your portfolio database name

    // 2. Connect to the database
    $connection = new mysqli($servername, $username, $password, $database);

    // 3. Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // 4. Capture and secure form inputs
    $name = $connection->real_escape_string($_POST['name']);
    $email = $connection->real_escape_string($_POST['email']);
    $phone = $connection->real_escape_string($_POST['phone']);
    $subject = $connection->real_escape_string($_POST['subject']);
    $message = $connection->real_escape_string($_POST['message']);

    // 5. Insert query into the database
    $sql = "INSERT INTO messages (name, email, phone, subject, message) 
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    
    if ($connection->query($sql) === TRUE) {
        // Redirect back to your portfolio page after successful submission
        header("Location: index.php?success=1");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
} else {
    // If someone tries to access contact.php directly via URL, send them back home
    header("Location: index.php");
    exit;
}
?>
