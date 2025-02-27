<?php
# Establish connection
include 'onestop.php';

# Define the query string for deletion
$sql = "DELETE FROM payment_details WHERE cname='user'";

# Execute the delete query
if ($conn->query($sql) === TRUE) {
    echo "Records deleted successfully";
} else {
    echo "Error deleting records: " . $conn->error;
}

# Disconnect
mysqli_close($conn);
?>
