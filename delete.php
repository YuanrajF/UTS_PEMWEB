<?php
    require './config/db.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $delete = mysqli_query($db_connect, "DELETE FROM products WHERE id=$id");

        if($delete) {
            header("Location: update.php"); // Ganti dengan nama file utama Anda
        } else {
            echo "Gagal menghapus produk.";
        }
    } else {
        echo "ID produk tidak valid.";
    }
?>
