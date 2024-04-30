<?php
require("../assets/configDB.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["zak_id"]) && is_numeric($_GET["zak_id"])) {
    $id = $_GET["zak_id"];

    $conn = connDB();
    $sql = "DELETE FROM zaci WHERE zak_id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_close($conn);
            header("location: kniha-studentu.php");
            exit();
        } else {
            echo mysqli_stmt_error($stmt);
        }
    }
} else {
    http_response_code(400);
    echo "Chyba: Neplatný požadavek";
}
?>
