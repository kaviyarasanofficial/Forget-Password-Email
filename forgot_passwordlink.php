<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // TODO: Validate the email format.

    // Connect to your database.
    $conn = new mysqli("localhost", "rectubmx_customer", "Rakesh@2023", "rectubmx_customerquery");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email exists in your database.
    $sql = "SELECT * FROM addnewadmin WHERE Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Email exists in the database.

        // Fetch the user's password from the database.
        $row = $result->fetch_assoc();
        $password = $row["password"];

        // Send the password to the user's email.
        $to = $email;
        $subject = "Your Password Recovery";
        $message = "Your password is: $password";
        $headers = "From: Crm@delta-leads.com";

        if (mail($to, $subject, $message, $headers)) {
            echo '<script>alert("Password sent to your email."); window.history.go(-2);</script>';
        } else {
           echo '<script>alert("Failed to send the password."); window.history.back();</script>';
        }
    } else {
        echo '<script>alert("Email not found in the database."); window.history.back();</script>';
    }

    $conn->close();
}
?>
