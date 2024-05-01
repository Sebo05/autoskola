<?php
session_start();
if (!isset($_SESSION["LogName"])) {
    header("Location: admin.php");
    exit();
}

require("../assets/configDB.php");

$jmeno = $uziv_jmeno = $telfon = $datum_nastupu = $heslo = $heslo2 = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];
    $uziv_jmeno = $_POST["uziv_jmeno"];
    $telfon = $_POST["telfon"];
    $datum_nastupu = $_POST["datum_nastupu"];
    $heslo = $_POST["heslo"];
    $heslo2 = $_POST["heslo2"];

    if ($heslo != $heslo2){
        $error = "Hesla se neshodují";
        echo "<p>$error</p>";
    }else{
        $sql = "INSERT INTO zaci (jmeno,uzivatelskeJmeno, telefon,datum_nastupu, heslo)
                VALUES (?,?,?,?,?)";

        $conn = connDB();
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false){
            echo mysqli_error($conn);
        }else{
            $hashed_password = password_hash($heslo, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssiss", $_POST["jmeno"],$_POST["uziv_jmeno"],$_POST["telfon"],$_POST["datum_nastupu"],$hashed_password);

            if (mysqli_stmt_execute($stmt)){
                $id = mysqli_insert_id($conn);
                //header("location: jizdy.php")
            }else{
                echo mysqli_stmt_error($stmt);
            }

        }

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
    <title>Přidání studenta</title>
</head>
<body>
<form action="pridani-studenta.php" method="post">
    <label for="jmeno">Celé jméno:</label>
    <input type="text"  name="jmeno" id="jmeno">

    <label for="uziv_jmeno">Uživatelské jméno:</label>
    <input type="text"  name="uziv_jmeno" id="uziv_jmeno">

    <label for="telefon">Telefoní číslo:</label>
    <input type="tel" name="telfon" id="telefon">

    <label for="datum_nastupu">Datum nástupu:</label>
    <input type="date" name="datum_nastupu" id="datum_nastupu">

    <label for="heslo">Heslo:</label>
    <input type="password" name="heslo" id="heslo">

    <label for="heslo2">Zopakuj heslo:</label>
    <input type="password" name="heslo2" id="heslo2">


    <input type="submit" value="Přidat studenta">
</form>
</body>
</html>