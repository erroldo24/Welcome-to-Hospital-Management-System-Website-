<?php
include('database.php');

echo "<h1>Checking Databases....</h1>";
createTableRoom();
createTableDoctor();
createTablePatient();
echo "Table Check has been completed";
// $query = "SELECT id FROM 'room'";
// $result = databaseConnection()->query($query);
// if($result !== FALSE){
//     echo "table avialble";   
// }
// else{
//     createTableRoom();
//     echo "Table Room created Sucessfully";
// }

// $query = "SELECT id FROM 'patient'";
// $result = databaseConnection()->query($query);


// if($result !== FALSE){
//     echo "table avialble";   
// }
// else{
//     createTablePatient();
//     echo "Table Patient created Sucessfully";
// }

// $query = "SELECT id FROM 'doctor'";
// $result = databaseConnection()->query($query);
// if($result !== FALSE){
//     echo "table avialble";   
// }
// else{
//     createTableDoctor();
//     echo "Table Doctor created Sucessfully";
// }
header( "refresh:2;url=dashboard_2.php" );
?>