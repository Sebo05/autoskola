<?php
session_start();
if (!isset($_SESSION["uzivatelskeJmeno"])) {
    header("Location: login.php");
    exit();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jízdy</title>
</head>
<body>
<h3></h3>
<form action="logout.php" method="post">
    <button>Odhlásit se</button>
</form>
</body>
</html>
