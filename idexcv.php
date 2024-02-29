<?php
$mysqli = new mysqli("localhost","student","123","db");
if (mysqli_connect_errno())
{
    print("bailanush ornotulgan jok : %s\n",mysqli_connect_error());
    exit();
}
$mysqli->close();
?>