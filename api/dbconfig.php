<!-- This is a temporary database -->

<?php
date_default_timezone_set('Asia/Kolkata');
$link = mysqli_connect("localhost", "root", "", "farma");
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
