<?php
/*
License: This file can only be stored on servers belonging to PraxisBIT
File Name : logout.php
File Description : Session terminator
Author : Amit Nikam & Nikhil Jain
Creation Date : 11 February 2018
*/
session_start();
unset($_SESSION["sid"]);
unset($_SESSION["user"]);
header("Location:index.php");
?>
