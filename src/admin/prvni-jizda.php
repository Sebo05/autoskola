<?php
session_start();
if (!isset($_SESSION["LogName"])) {
    header("Location: admin.php");
    exit();
}

require("../assets/configDB.php");

$datumJedna = $casJedna = $zak_id = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datumJedna = $_POST['datumJedna'];
    $casJedna = $_POST['casJedna'];
    $zak_id = $_POST['zak_id'];

    $sql = "INSERT INTO jizdy (datumJedna, casJedna, zak_id) VALUES (?, ?, ?)";
    $conn = connDB();
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "ssi", $datumJedna, $casJedna, $zak_id);

        if (mysqli_stmt_execute($stmt)) {
            $id = mysqli_insert_id($conn);
        } else {
            echo mysqli_stmt_error($stmt);
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Přidání první jízdy</title>
</head>
<body>
<h3>Přidání první jízdy</h3>
<form action="" method="post">
    <input type="hidden" name="zak_id" value="<?php echo $_GET['id']; ?>">
    <label for="datumJedna">Datum první jízdy</label>
    <input type="date" name="datumJedna" id="datumJedna">
    <label for="casJedna">Čas první jízdy</label>
    <input type="time" name="casJedna" id="casJedna">
    <input type="submit" value="Přidat jízdu">
</form>
</body>
</html>
