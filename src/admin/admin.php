<?php
require ("../assets/configDB.php");

$conn = connDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $LogName = $_POST["LogName"];
    $heslo = $_POST["heslo"];

    $LogName = mysqli_real_escape_string($conn, $LogName);

    $sql = "SELECT LogName FROM admin WHERE LogName = '$LogName'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['LogName'];
        session_start();
        $_SESSION["LogName"] = $LogName;
        header("location: kniha-studentu.php");
        exit();
    }else{
        echo "Neplatné jméno nebo heslo.";
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Přihlášení do admin účtu</title>
</head>
<body>
<form action="" method="post">
    <h1>Přihlášení do admin účtu:</h1>
    <label for="LogName">Uživatelské jméno:</label>
    <input type="text" name="LogName" id="LogName" autocomplete="off" required>
    <label for="heslo">Heslo:</label>
    <input type="password" name="heslo" id="heslo" autocomplete="off" required>
    <input type="submit" value="Přihlásit se">
</form>
</body>
</html>
