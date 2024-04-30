<?php
require ("../assets/configDB.php");

$conn = connDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uzivatelskeJmeno = $_POST["uzivatelskeJmeno"];
    $heslo = $_POST["heslo"];

    $uzivatelskeJmeno = mysqli_real_escape_string($conn, $uzivatelskeJmeno);

    $sql = "SELECT uzivatelskeJmeno FROM zaci WHERE uzivatelskeJmeno = '$uzivatelskeJmeno'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['uzivatelskeJmeno'];
        session_start();
        $_SESSION["uzivatelskeJmeno"] = $uzivatelskeJmeno;
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
<label for="uzivatelskeJmeno">Uživatelské jméno:</label>
<input type="text" name="uzivatelskeJmeno" id="uzivatelskeJmeno" autocomplete="off" required>
<label for="heslo">Heslo:</label>
<input type="password" name="heslo" id="heslo" autocomplete="off" required>
<input type="submit" value="Přihlásit se">
</form>
</body>
</html>
