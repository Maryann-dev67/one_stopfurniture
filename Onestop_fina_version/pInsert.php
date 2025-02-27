<?php
#establish connection
include 'onestop.php';
#collect values from the form
include 'pFields.php';

#define the query string
$sql = "INSERT INTO payment_details (cname,ccnum)VALUES ('$cname','$ccnum')";

#test the query
if (mysqli_query($conn, $sql)) {
  echo "A new record has been created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
#disconnect
mysqli_close($conn);
?>