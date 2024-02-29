<?php
$servername = "localhost";
$database = "student";
$username = "123";
$password = "db";
// bailanush tuzuu
$conn = mysqli_connect($servername,
$username, $password, $database);
// bailanush teksheriluudo
if (!$conn) {
    die("Conektion failed: ".mysqli_connect_error());

}
echo "Connected successfully";
mysqli_close($conn);
?>