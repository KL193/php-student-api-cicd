<?php
include 'db.php';

$sql = "SELECT * FROM student WHERE LastName='Perera'";
$result = $conn->query($sql);

$students = [];
while ($row = $result->fetch_assoc()) {
    $students[] = $row;
}

echo json_encode($students);
?>
