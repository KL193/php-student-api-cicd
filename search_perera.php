<?php
include 'db.php';

$sql = "SELECT * FROM students WHERE LastName='Perera'";
$result = $conn->query($sql);

$students = [];
while ($row = $result->fetch_assoc()) {
    $students[] = $row;
}

echo json_encode($students);
?>
