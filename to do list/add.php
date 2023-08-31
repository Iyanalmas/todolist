<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newTask = $_POST["task"];
    $file = fopen("tugas.txt", "a");
    fwrite($file, $newTask . PHP_EOL);
    fclose($file);
    header("Location: index.php");
    exit();
}
?>
