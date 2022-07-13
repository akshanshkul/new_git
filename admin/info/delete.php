<?php

include "mydbcon.php"; // Using database connection file here
global $dbcon;
$id = $_GET['id']; // get id through query string

$del = mysqli_query($dbCon,"DELETE FROM `contact_form_info` WHERE `id`= '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:admin_info_data.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
