// check_email_availability.php - Your new PHP script for email validation
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the AJAX request
    $email = $_POST["email"];
    
    // Perform a database query to check email availability
    // Replace this with your actual database query
    // Example: $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    
    // Check if the email exists in the database
    if ($result && mysqli_num_rows($result) > 0) {
        echo "unavailable"; // Email is already taken
    } else {
        echo "available"; // Email is available
    }
}
?>
