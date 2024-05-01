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
        <?php while ($row = mysqli_fetch_assoc($query)):
            $sql_jizdy = "SELECT * FROM jizdy WHERE zak_id = {$row['zak_id']} LIMIT 1";
            $query_jizdy = mysqli_query($conn, $sql_jizdy);
            $ma_prvni_jizdu = mysqli_num_rows($query_jizdy) > 0;
            ?>
            <li>
                <p>Jméno: <?= htmlspecialchars($row["jmeno"])?></p>
            </li>
            <li>
                <p>Datum nástupu: <?=htmlspecialchars($row["datum_nastupu"])?></p>
            </li>
            <li>
                <p>Telefon: <?= htmlspecialchars($row["telefon"])?></p>
            </li>
            <?php if ($ma_prvni_jizdu): ?>
            <li>
                <a href="pridani-jizd.php?id=<?= $row['zak_id']?>">Přidat další jízdy</a>
            </li>
        <?php else: ?>
            <li>
                <a href="prvni-jizda.php?id=<?= $row['zak_id']?>">Přidat první jízdu</a>
            </li>
        <?php endif; ?>
            <li>
                <a href="smazat-studenta.php?zak_id=<?= $row['zak_id']?>">Smazat studenta z Databaze</a>
            </li>
        <?php endwhile;?>
    </ul>
<?php endif;?>
</body>
</html>
