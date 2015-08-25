<?php session_start();


$_SESSION["x"] = 1;


echo  $_SESSION["x"];

session_unset("x");

//session_destroy();

echo $_SESSION["x"];

