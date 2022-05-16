<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Paitent - BackEnd</title>
</head>

<body>
    <div class="conatiner">
        <div style="padding-top: 2%; padding-left: 3%;">
            <button onclick="history.back()" class="btn btn-secondary">
                <- Go Back</button>
        </div>
    </div>
    <div style="padding-bottom: 2%;"></div>

</body>

</html>

<?php
include('database.php');
$name = $_POST['name'];
$age = $_POST['age'];
$contact_number = $_POST['contact_number'];
$disease = $_POST['disease'];
$doctor = $_POST['doctor'];
$status = $_POST['status'];
$room = $_POST['room'];
$remarks = $_POST['remarks'];
$conn = databaseConnection();
$sql = "INSERT INTO patient (name, Age, contact_number, disease, doctor, status, room, remarks) VALUES ('" . $name . "','" . $age . "','" . $contact_number . "','" . $disease . "','" . $doctor . "','" . $status . "','" . $room . "','" . $remarks . "')";

if ($conn->query($sql) === TRUE) {
    echo "New Patient has been added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
