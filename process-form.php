<?php
// Include the database connection script
include("db-connect.php");

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Check if 'name' is not empty
    if (!empty($name)) {
        // Prepare and execute the SQL insert query
        $sql = "INSERT INTO feedback (name, email, subject, message) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            // Insert successful
            echo "Feedback submitted successfully!";
        } else {
            // Insert failed
            echo "Error: " . $stmt->error;
        }

        // Close the statement and database connection
        $stmt->close();
        $conn->close();
    } else {
        // Handle the case where 'name' is empty or not provided
        echo "Name is required.";
    }
}
?>
