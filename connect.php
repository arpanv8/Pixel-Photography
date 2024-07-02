<?php
$servername = 'localhost';
$username = 'root';
$password = 'Arpan@bha07';
$dbname = 'assignment';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo('connection is sucessful');
}

?>


