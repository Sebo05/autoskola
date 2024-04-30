<?php
session_start();
if (!isset($_SESSION["LogName"])) {
    header("Location: admin.php");
    exit();
}

require("../assets/configDB.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Přidání jízd</title>
</head>
<body>

</body>
</html>
