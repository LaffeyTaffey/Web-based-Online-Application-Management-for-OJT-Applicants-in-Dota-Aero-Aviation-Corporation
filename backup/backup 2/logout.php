<?php
session_start();
$conn= mysqli_connect("localhost", "root", "", "account");
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login.php");