<?php
session_start();
require ("../assets/configDB.php");

$conn = connDB();

if (!isset($_SESSION["uzivatelskeJmeno"])) {
    header("Location: login.php");
    exit();
}

$uzivatelskeJmeno = $_SESSION["uzivatelskeJmeno"];

$sql_student_id = "SELECT zak_id FROM zaci WHERE uzivatelskeJmeno = '$uzivatelskeJmeno'";
$result_student_id = mysqli_query($conn, $sql_student_id);

if (!$result_student_id) {
    echo "Chyba při získávání ID studenta: " . mysqli_error($conn);
    exit();
}

$row_student_id = mysqli_fetch_assoc($result_student_id);
$student_id = $row_student_id['zak_id'];

$sql_jizdy = "SELECT * FROM jizdy WHERE zak_id = $student_id";
$query_jizdy = mysqli_query($conn, $sql_jizdy);
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
<?php if (mysqli_num_rows($query_jizdy) == 0):?>
    <p>Ještě nemáš žádné jízdy</p>
<?php else:?>
    <ul>
        <?php while ($row_jizda = mysqli_fetch_assoc($query_jizdy)):?>
            <li>
                <p>Datum: <?=htmlspecialchars($row_jizda["datumJedna"])?></p>
            </li>
            <li>
                <p>Čas: <?=htmlspecialchars($row_jizda["casJedna"])?></p>
            </li>
        <?php endwhile;?>
    </ul>
<?php endif;?>
<form action="logout.php">
<button>Odhlásit se</button>
</form>
<a href="../index.php">Domů</a>
</body>
</html>
