<?php
# Establish connection
include 'onestop.php';

# Define the query string for deletion
$sql = "DELETE FROM admission WHERE country='Kenya'";

# Execute the delete query
if ($conn->query($sql) === TRUE) {
    echo "Records deleted successfully";
} else {
    echo "Error deleting records: " . $conn->error;
}

# Disconnect
mysqli_close($conn);
?>