<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Room Backend</title>
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
$name = $_POST['room_number'];
$remarks = $_POST['remarks'];
$conn = databaseConnection();
$sql = "INSERT INTO room (room_number,status,remarks) VALUES('" . $name . "','vaccant','" . $remarks . "')";

if ($conn->query($sql) === TRUE) {
    echo "New Room has been created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
