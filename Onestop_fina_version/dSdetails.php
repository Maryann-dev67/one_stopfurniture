<?php
# Establish connection
include 'onestop.php';

# Define the query string for deletion
$sql = "DELETE FROM sign_up_details WHERE email='elvislutomia@gmail.com'";

# Execute the delete query
if ($conn->query($sql) === TRUE) {
    echo "Records deleted successfully";
} else {
    echo "Error deleting records: " . $conn->error;
}

# Disconnect
mysqli_close($conn);
?>
