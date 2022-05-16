

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Created</title>
</head>
<body>
<div class="conatiner">
        <div style="padding-top: 2%; padding-left: 3%;">
            <button onclick="history.back()" class="btn btn-secondary"><- Go Back</button>
        </div>
    </div>
    <div style="padding-bottom: 3%;"></div>
    <?php
    include('database.php');
    $name = $_POST['name'];
    $remarks = $_POST['remarks'];
    $conn = databaseConnection();
    $sql = "INSERT INTO doctor (name,remarks) VALUES('".$name."','".$remarks."')";

    if ($conn->query($sql) === TRUE) {
        echo "New Doctor has been created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>

</body>
</html>
