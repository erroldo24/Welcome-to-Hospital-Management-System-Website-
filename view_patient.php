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
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['contact_number'] . "</td>";
            echo "<td>" . $row['disease'] . "</td>";
            echo "<td>" . $row['doctor'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['room'] . "</td>";
            echo "<td>" . $row['remarks'] . "</td>";
            echo "</tr>";
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
    <title>View Patients</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>

<body>
<div class="conatiner">
        <div style="padding-top: 2%; padding-left: 3%;">
            <button onclick="history.back()" class="btn btn-secondary"><- Go Back</button>
        </div>
    </div>
    <div style="padding-bottom: 2%;"></div>
    <div style="padding-top: 0%;"></div>
    <center>
        <h1 class="display-4">Patient Summary</h1>
        <hr style="width: 40%; border:2px solid grey;">
    </center>
    <div style="padding-top: 3%;"></div>
    <center>
        <div style="width: 80%;">
            <table class="table table-light">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Contact Number</th>
                        <th>Disease</th>
                        <th>Doctor</th>
                        <th>Status</th>
                        <th>Room</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php data(); ?>
                </tbody>
            </table>
        </div>
    </center>
</body>

</html>