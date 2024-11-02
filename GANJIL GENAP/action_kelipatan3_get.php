<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $number = $_GET['number'];

    if (is_numeric($number)) {
        if ($number % 3 == 0) {
            echo "$number adalah bilangan kelipatan 3";
        } else {
            echo "$number adalah bilangan yang bukan kelipatan 3";
        }
    } else {
        echo "Input harus berupa angka.";
}
} else {
    echo "Akses tidak valid.";
}
?>
