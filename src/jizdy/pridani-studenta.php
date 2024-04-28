<?php
session_start();
if (!isset($_SESSION["jmeno"])) {
    header("Location: login.php");
    exit();
}
require ("../assets/configDB.php");

$jmeno= $telfon = $heslo = $heslo2 = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];
    $telfon = $_POST["telfon"];
    $heslo = $_POST["heslo"];
    $heslo2 = $_POST["heslo2"];

    if ($heslo != $heslo2){
        $error = "Hesla se neshodují";
        echo "<p>$error</p>";
    }else{
        $sql = "INSERT INTO zaci (jmeno, telefon, heslo)
                VALUES (?,?,?,?)";

        $conn = connDB();
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false){
            echo mysqli_error($conn);
        }else{
            $hashed_password = password_hash($heslo, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sis", $_POST["jmeno"],$_POST["telfon"],$hashed_password);

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

</body>
</html>