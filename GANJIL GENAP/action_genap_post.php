<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    if (is_numeric($number)) {
        if ($number % 2 == 0) {
            echo "$number adalah bilangan genap";
        } else {
            echo "$number adalah bilangan ganjil";
        }
    } else {
        echo "Input harus berupa angka.";
    }
} else {
    echo "Akses tidak valid.";
}
?>
