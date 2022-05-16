<?php
include('database.php');
function data()
{
    $conn = databaseConnection();
    $sql = "SELECT * FROM patient";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo " <option value=" . $row['name'] . ">" . $row['name'] . "</option>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discharge Patient</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

</head>

<body style="font-family: Arial, Helvetica, sans-serif;">
<div class="conatiner">
        <div style="padding-top: 2%; padding-left: 3%;">
            <button onclick="history.back()" class="btn btn-secondary"><- Go Back</button>
        </div>
    </div>
    <div style="padding-bottom: 2%;"></div>
    <div style="padding-top: 0%;"></div>
    <center>
        <h1 class="display-4">Discharge Patient</h1>
        <hr style="width: 40%; border:2px solid grey;">
    </center>
    <center>
        <form action="dis_patient_backend.php" method="POST">
            <div style="padding-top: 1%;"></div>
            <label for="name" style="padding-left: 2%;">Patient: </label>
            <select name="name">
                <?php data(); ?>
            </select>
            <br>
            <div style="padding-top: 2%;"></div>
            <input type="submit" class="btn btn-primary" value="Discharge Patient">
        </form>
    </center>
</body>

</html>