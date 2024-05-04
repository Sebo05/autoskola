<?php
session_start();
if (isset($_SESSION["uzivatelskeJmeno"])) {
    header("location: jizdy-studenta.php");
    exit();
}
require("../assets/configDB.php");

$conn = connDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uzivatelskeJmeno = $_POST["uzivatelskeJmeno"];
    $heslo = $_POST["heslo"];

    $uzivatelskeJmeno = mysqli_real_escape_string($conn, $uzivatelskeJmeno);

    $sql = "SELECT uzivatelskeJmeno, id FROM zaci WHERE uzivatelskeJmeno = '$uzivatelskeJmeno'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $uzivatelskeJmeno = $row['uzivatelskeJmeno'];
        $zak_id = $row['id'];
        session_start();
        $_SESSION["uzivatelskeJmeno"] = $uzivatelskeJmeno;
        header("location: jizdy-studenta.php");
        exit();
    } else {
        $error = "Neplatné jméno nebo heslo.";
    }
}
?>
<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../dist/output.css">
    <title>Přihlášení do knihy jízd</title>
</head>
<body>
<section class="h-screen flex flex-col items-center justify-center gap-5 md:flex-row md:justify-center bg-gray-100">
    <div class="w-[300px] h-auto pb-10 pt-14 flex flex-col justify-center items-center rounded-xl shadow-2xl bg-white">
        <form action="" method="post">
            <div class="uppercase text-center">
                <h1 class="text-xl mb-4">Přihlášení do knihy jízd:</h1>
            </div>
            <label class="" for="uzivatelskeJmeno">Uživatelské jméno:</label>
            <div class="mt-2 mb-4">
                <input type="text" class="ml-1 w-[250px] border-2 border-violet-500 caret-violet-500 text-xl py-2 pl-3 outline-none rounded-md input-username " name="uzivatelskeJmeno" id="uzivatelskeJmeno" autocomplete="off" required>
            </div>

            <label for="heslo">Heslo:</label>
            <div class="mt-2 mb-4">
                <input type="password" class="ml-1 w-[250px] border-2 border-violet-500 caret-violet-500 rgb(145 89 240) text-xl py-2 pl-3 outline-none rounded-md input-password" name="heslo" id="heslo" autocomplete="off" required>
            </div>
            <div class="text-center text-red-800 text-xl mt-3">
                <?= $error ?? '' ?>
            </div>
            <div class="text-center text-white mt-6">
                <button class="bg-violet-500 w-32 py-2 rounded-lg hover:bg-violet-600 hover:scale-105 transition duration-500 mb-0">Přihlásit se</button>
            </div>
        </form>
    </div>
</section>
</body>
</html>