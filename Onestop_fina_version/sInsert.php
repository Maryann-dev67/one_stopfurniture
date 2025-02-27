<?php
# Establish connection
include 'oneconnection.php';

# Collect values from the form
//include 'sFields.php';

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate form data (basic example)
if (empty($name) || empty($email) || empty($password)) {
    die("Error: All fields are required.");
}


// Define the query string (removed extra comma in VALUES)
$sql = "INSERT INTO onestop_furniture.users (name, email, password) VALUES ('$name', '$email', '$password')";

// Test the query
if (mysqli_query($conn, $sql)) {
    // Display success message
    echo "Signup successful! Redirecting to home...";
    
    // Redirect to login page after 2 seconds
    header("refresh:2; url=index.html");
} else {
    // Display error message if query fails
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

# Disconnect
mysqli_close($conn);

