<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['identifier'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

if (!$result) die ("Some problem with : " . mysqli_error($mysqli));

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

