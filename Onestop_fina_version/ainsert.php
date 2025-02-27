<?php
// ainsert.php

// Establish connection to the database
include 'oneconnection.php';

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successfully created";
}

// Collect form data
$name = $_POST['name'];
$country = $_POST['country'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$address = $_POST['address'];

// Validate form data (basic example)
if (empty($name) || empty($country) || empty($city) || empty($state) || empty($zipcode) || empty($address)) {
    die("Error: All fields are required.");
}

// Define the SQL query
$sql = "INSERT INTO onestop_furniture.addressInfo(name, country, city, state, zipcode, address) 
        VALUES('$name', '$country', '$city', '$state', '$zipcode', '$address')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "A new record has been created successfully";
} else {
    error_log("Error: " . $sql . "\n" . mysqli_error($conn), 3, "error.log");

    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
