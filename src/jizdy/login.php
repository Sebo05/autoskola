<?php
require ("../assets/configDB.php");

$conn = connDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];
    $heslo = $_POST["heslo"];

    $jmeno = mysqli_real_escape_string($conn, $jmeno);

    $sql = "SELECT jmeno FROM zaci WHERE jmeno = '$jmeno'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['jmeno'];
        session_start();
        $_SESSION["jmeno"] = $jmeno;
        header("location: jizdy.php");
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
    <title>Přihlášení do knihy jízd</title>
</head>
<body>
<form action="" method="post">
    <h1>Přihlášení do knihy jízd:</h1>
<label for="jmeno">Uživatelské jméno:</label>
<input type="text" name="jmeno" id="jmeno" autocomplete="off" required>
<label for="heslo">Heslo:</label>
<input type="password" name="heslo" id="heslo" autocomplete="off" required>
<input type="submit" value="Přihlásit se">
</form>
</body>
</html>
