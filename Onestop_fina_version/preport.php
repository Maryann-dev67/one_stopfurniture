<?php
# Establish connection
include 'onestop.php';

# Define the query string for selecting all users
$sql = "SELECT cname FROM payment_details";

# Execute the select query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    $count = 1;
    echo "<table border=0 align='center' width=40% height=60%>";
    echo "<tr bgcolor='#f77062'><td>C.Num</td><td>Name</td></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr bgcolor='#f77062'><td>" . $count . "</td><td>" . $row["cname"] . "</td></tr>";
        $count++;
    }
    echo "</table>";
    echo "</br>Report successfully generated as shown above";
} else {
    echo "0 results";
}

# Disconnect
mysqli_close($conn);
?>
