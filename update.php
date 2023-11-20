<?php
    require './config/db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        $update = mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price' WHERE id=$id");

        if ($update) {
            header("Location: show.php"); // Ganti dengan nama file utama Anda
        } else {
            echo "Gagal menyimpan perubahan.";
        }
    } else {
        echo "Akses tidak sah.";
    }
?>
