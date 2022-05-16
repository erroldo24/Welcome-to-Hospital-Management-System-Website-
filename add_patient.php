<?php
include('database.php');
function roomdata()
{
    $conn = databaseConnection();
    $sql = "SELECT * FROM room";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($row['status'] == "vaccant") {
                echo " <option value=" . $row['room_number'] . ">" . $row['room_number'] . "</option>";
            }
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
function doctordata()
{
    $conn = databaseConnection();
    $sql = "SELECT * FROM doctor";
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
    <title>Add Patient</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body style="font-family: Arial, Helvetica, sans-serif;">
    <div class="conatiner">
        <div style="padding-top: 2%; padding-left: 3%;">
            <button onclick="history.back()" class="btn btn-secondary"><- Go Back</button>
        </div>
    </div>
    <div style="padding-bottom: 2%;"></div>
    <div style="padding-top: 0%; padding-bottom:3%;">
        <center>
            <h1 class="display-4">Add Patient</h1>
            <hr style="width:40%; border: 2px solid grey;">
        </center>
    </div>
    <center>
        <form action="add_room_backend.php" method="post">
            <label for="name" style="width:10%;">Name: </label>
            <input type="text" name="name" style="width:15%;">
            <br>
            <div style="padding-top: 0.5%;"></div>

            <label for="age" style="width:10%;">Age:</label>
            <input type="text" name="age" style="width:15%;">
            <br>
            <div style="padding-top: 0.5%;"></div>

            <label style="width:10%;" for="contact_number">Contact Number:</label>
            <input type="text" name="contact_number" style="width:15%;">
            <br>
            <div style="padding-top: 0.5%;"></div>

            <label style="width:10%;" for="disease">Disease:</label>
            <input type="text" name="disease" style="width:15%;">
            <br>
            <div style="padding-top: 0.5%;"></div>

            <label style="width:10%;" for="doctor">Choose a Doctor:</label>
            <select name="doctor" style="width:15%;">
                <?php doctordata(); ?>
            </select>
            <br>
            <div style="padding-top: 0.5%;"></div>
            <label style="width:10%;" for="status">Status: </label>
            <select name="status" style="width:15%;">
                <option value="critical">Critcal</option>
                <option value="normal">Normal</option>
                <option value="serious">Serious</option>
            </select>
            <br>
            <div style="padding-top: 0.5%;"></div>
            <label style="width:10%;" for="room">Room Number: </label>
            <select name="room" style="width:15%;">
                <?php roomdata(); ?>
            </select>
            <br>
            <div style="padding-top: 0.5%;"></div>
            <label style="width:10%;" for="remarks">Remarks</label>
            <input type="text" name="remarks" style="width:15%;">
            <br>
            <div style="padding-top: 2%;"></div>
            <div style="padding-left: 2%;">
                <input class="btn btn-primary" type="submit" value="Admit Patient">
            </div>
        </form>
    </center>
</body>

</html>