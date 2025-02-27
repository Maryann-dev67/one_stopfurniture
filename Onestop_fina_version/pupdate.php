<?php
# Establish connection
include 'onestop.php';

# Define the query string for update
$sql = "UPDATE payment_details SET cname='new_user' WHERE cname='user'";

# Execute the update query
if ($conn->query($sql) === TRUE) {
    echo "Records updated successfully";
} else {
    echo "Error updating records: " . $conn->error;
}

# Disconnect
mysqli_close($conn);
?>
