<?php
//session_start();
//if (!isset($_SESSION["LogName"])) {
//    header("Location: admin.php");
//    exit();
//}

require("../assets/configDB.php");

$LogName = $heslo = $heslo2 = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $LogName = $_POST["LogName"];
    $heslo = $_POST["heslo"];
    $heslo2 = $_POST["heslo2"];

    if ($heslo != $heslo2){
        $error = "Hesla se neshodují";
        echo "<p>$error</p>";
    }else{
        $sql = "INSERT INTO admin (LogName, heslo)
                VALUES (?,?)";

        $conn = connDB();
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false){
            echo mysqli_error($conn);
        }else{
            $hashed_password = password_hash($heslo, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ss", $_POST["LogName"],$hashed_password);

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
<form action="" method="post">
    <label for="LogName">Celé jméno:</label>
    <input type="text"  name="LogName" id="LogName">

    <label for="heslo">Heslo:</label>
    <input type="password" name="heslo" id="heslo">

    <label for="heslo2">Zopakuj heslo:</label>
    <input type="password" name="heslo2" id="heslo2">


    <input type="submit" value="Přidat studenta">
</form>
</body>
</html>