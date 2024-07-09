<?php
include 'dbconnect.php';

$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li>". $row["name"]. " - ". $row["date"]. " at ". $row["time"]. "</li>";
    }
} else {
    echo "No bookings found";
}
?>