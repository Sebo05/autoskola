<?php
require ("../assets/configDB.php");
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
<label for="user_name">Uživatelské jméno:</label>
<input type="text" name="user_name" id="user_name" autocomplete="off" required>
<label for="password">Heslo:</label>
<input type="password" name="password" id="password" autocomplete="off" required>
<input type="submit" value="Přihlásit se">
</body>
</html>
