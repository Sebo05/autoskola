<?php
session_start();

if (isset($_SESSION['uzivatelskeJmeno'])){
    session_unset();
    session_destroy();
}
header('Location: ../index.html');
exit();