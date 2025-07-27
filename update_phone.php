<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"));

$studentID = $data->StudentID;
$phone = $data->PhoneNumber;

$sql = "UPDATE students SET PhoneNumber='$phone' WHERE StudentID=$studentID";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Phone updated"]);
} else {
    echo json_encode(["message" => "Error updating phone"]);
}
?>
