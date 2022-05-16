<?php
function databaseConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PMS";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
    return $conn;
}


function createTableDoctor()
{
    $conn = databaseConnection();
    $sql = "CREATE TABLE IF NOT EXISTS doctor (
        id	INTEGER  AUTO_INCREMENT PRIMARY KEY,
        name	TEXT,
        remarks	TEXT
    )";
    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    $conn->close();
}
function createTableRoom()
{
    $conn = databaseConnection();
    $sql = "CREATE TABLE IF NOT EXISTS room (
        room_id	INTEGER AUTO_INCREMENT PRIMARY KEY,
        room_number	TEXT,
        status	TEXT,
        remarks	TEXT
    )";
    if ($conn->query($sql) === TRUE) {
        echo "Table Patient created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    $conn->close();
}
function createTablePatient()
{
    $conn = databaseConnection();
    $sql = "CREATE TABLE IF NOT EXISTS patient (
        id	INTEGER AUTO_INCREMENT PRIMARY KEY,
        name	TEXT,
        Age	TEXT,
        contact_number	TEXT,
        disease	TEXT,
        doctor	TEXT,
        status	TEXT,
        room	TEXT,
        remarks	TEXT
    )";
    if ($conn->query($sql) === TRUE) {
        echo "Table Patient created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    $conn->close();
}
