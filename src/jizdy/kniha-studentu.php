<?php
session_start();
if (!isset($_SESSION["jmeno"])) {
    header("Location: login.php");
    exit();
}

require ("../assets/configDB.php");
$conn = connDB();

$sql = "SELECT * FROM zaci";
$result = mysqli_query($conn, $sql);

if (!$result){
    echo mysqli_error($conn);
}else{
    $zaci = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

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
<?php if (empty($zak)):?>
<p>Nejsou žádní studenti v databazi!</p>
<?php else:?>
<?php foreach ($zaci as $zak):?>
    <ul>
        <li>
            <p>Jméno: <?= htmlspecialchars($zak["jmeno"])?></p>
        </li>
        <li>
            <p>Telefon: <?= htmlspecialchars($zak["telefon"])?></p>
        </li>
        <li>
            <a href="jizdy-student.php?id=<?= $zak['id']?>">Jizdy studenta</a>
        </li>
    </ul>

<?php endforeach;?>
<?php endif;?>
</body>
</html>
