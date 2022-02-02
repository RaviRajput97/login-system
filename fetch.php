<?php
include 'config.php';
$query="select * from users"; // Fetch all the data from the table users
$result=mysqli_query($link,$query);
?>