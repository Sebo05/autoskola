<?php
session_start();
if (!isset($_SESSION["jmeno"])) {
    header("Location: login.php");
    exit();
}

require ("../assets/configDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_SESSION["id"])) {

}