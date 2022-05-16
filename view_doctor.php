<?php
include('database.php');
function data()
{
    $conn = databaseConnection();
    $sql = "SELECT * FROM doctor";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr scope='row'>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
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
    <title>View Doctor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body>
    <div class="conatiner">
        <div style="padding-top: 2%; padding-left: 3%;">
            <button onclick="history.back()" class="btn btn-secondary"><- Go Back</button>
        </div>
    </div>
    <div style="padding-bottom: 2%;"></div>
    <center>
        <h1 class="display-4">View Avilable Doctor's</h1>
    </center>
    <div style="padding-top: 3%;"></div>
    <center>
        <div style="width: 80%;">
            <table class="table table-light">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Doctor Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Remarks</th>
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