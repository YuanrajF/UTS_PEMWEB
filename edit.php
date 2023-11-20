<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <?php
        require './config/db.php';

        if(isset($_GET['id'])) {
            $id = $_GET['id'];

            $product = mysqli_query($db_connect, "SELECT * FROM products WHERE id=$id");
            $row = mysqli_fetch_assoc($product);
    ?>
            <h2>Edit Produk</h2>
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?=$row['id'];?>">
                <label for="name">Nama produk:</label>
                <input type="text" name="name" value="<?=$row['name'];?>" required>
                <br>
                <label for="price">Harga:</label>
                <input type="text" name="price" value="<?=$row['price'];?>" required>
                <br>
                <!-- Tambahkan input untuk gambar jika diperlukan -->
                <input type="submit" value="Simpan">
            </form>
    <?php
        } else {
            echo "ID produk tidak valid.";
        }
    ?>
</body>
</html>
