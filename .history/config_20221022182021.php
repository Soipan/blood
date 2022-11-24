<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "si";


$conn = mysqli_connect($server, $username, $password, $database);

if(! $conn){
    echo "<p><strong>db connection failed</strong></p>";
}
?>