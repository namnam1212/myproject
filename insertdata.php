<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('chonthicha', 'nam', 'namzii@example.com')";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('winner', 'tata', 'tata12@example.com')";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('pornphun', 'ple', 'lovelove@example.com')";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('sutthiporn', 'mexmex', 'pleple@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
