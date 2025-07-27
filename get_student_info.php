<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"));

$studentID = $data->StudentID;
$sql = "SELECT FirstName, LastName, Address FROM students WHERE StudentID = $studentID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(["message" => "Student not found"]);
}
?>
