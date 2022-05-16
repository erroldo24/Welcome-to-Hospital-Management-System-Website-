<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard - Patient Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="font-family: Arial, Helvetica, sans-serif;">
    <div class="container-fluid">
        <center>
            <div style="padding-top: 5%;"></div>
            <h1 class="display-3">Welcome to Session</h1>
            <hr style="width: 50%; border: solid 2px black;">
        </center>
    </div>
    <div style="padding-left: 3%;">
        <h2>Your Required Vairables are,</h2>
        <div class="row">
            <div class="col-2">
                <?php
                echo "Username: " . $_SESSION['username'] . "<br>";
                ?>
            </div>
            <div class="col-2">
                <?php
                echo "Password: " . $_SESSION['password'];
                ?>
            </div>
        </div>
    </div>
    <hr>
    <center>
        <div style="padding-top: 3%;"></div>
        <h1 class="display-5">Avaible Option's</h1>
        <h2 class="display-6">Doctor Managment System</h2>
        <div style="padding-top: 2%; padding-bottom:2%;">
            <a href="add_doctor.html"><button>Add Doctor</button></a>
            <a href="view_doctor.php"><button>View Doctor</button></a>
        </div>

        <h2 class="display-6">Room Management System</h2>
        <div style="padding-top: 2%; padding-bottom:2%;">
            <a href="add_room.html"><button>Add Room</button></a>
            <a href="view_room.php"><button>View Room</button></a>
        </div>
        <h2 class="display-6">Patient Management System</h2>
        <div style="padding-top: 2%; padding-bottom:2%;">
            <a href="add_patient.php"><button>Admit Patient</button></a>
            <a href="view_patient.php"><button>View Patient</button></a>
            <a href="discharge_patient.php"><button>Discharge Patient</button></a>
        </div>
    </center>
</body>

</html>