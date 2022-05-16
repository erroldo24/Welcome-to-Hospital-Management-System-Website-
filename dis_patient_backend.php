<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discharge Patient Backend</title>
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
$conn = databaseConnection();
$sql = "DELETE FROM patient WHERE name='.$name.'";

if ($conn->query($sql) === TRUE) {
    echo "Patient has been discharged successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>