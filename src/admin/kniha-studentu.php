<?php
session_start();
if (!isset($_SESSION["LogName"])) {
    header("Location: admin.php");
    exit();
}

require("../assets/configDB.php");
$conn = connDB();

$sql = "SELECT * FROM zaci";
$query = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kniha studentů</title>
</head>
<body>
<a href="pridani-studenta.php">Přidat studenta</a>
<?php if (mysqli_num_rows($query) == 0):?>
<p>Nejsou žádní studenti v databazi!</p>
<?php else:?>
    <ul>
    <?php while ($row = mysqli_fetch_assoc($query)):?>
        <li>
            <p>Jméno: <?= htmlspecialchars($row["jmeno"])?></p>
        </li>
        <li>
            <p>Telefon: <?= htmlspecialchars($row["telefon"])?></p>
        </li>
        <li>
            <a href="pridani-jizd.php?id=<?= $row['zak_id']?>">Přidat jízdy</a>
        </li>
        <li>
            <a href="smazat-studenta.php?zak_id=<?= $row['zak_id']?>">Smazat studenta z Databaze</a>
        </li>
    <?php endwhile;?>
    </ul>
<?php endif;?>
</body>
</html>
