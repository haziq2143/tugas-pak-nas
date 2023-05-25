<?php
require_once './koneksi.php';
$conn = getConn();
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $foto = $_POST['foto'];
    $status = $_POST['status'];
    $stok = $_POST['stok'];
    $id = $_GET['id'];

    $sql = "UPDATE `menu` SET `nama_menu`= :nama,`harga_menu`= :harga,`foto_menu`= :foto,`status_menu`= :status,`stok_menu`= :stok WHERE id_menu = :id";
    $result = $conn->prepare($sql);
    $result->bindParam('id', $id);
    $result->bindParam('nama', $nama);
    $result->bindParam('harga', $harga);
    $result->bindParam('foto', $foto);
    $result->bindParam('status', $status);
    $result->bindParam('stok', $stok);
    $result->execute();
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Nama Menu</label>
        <br>
        <input type="text" name="nama">
        <br>
        <label for="">Harga</label>
        <br>
        <input type="number" name="harga" id="">
        <br>
        <label for="">foto</label>
        <br>
        <input type="file" name="foto" id="">
        <br>
        <label for="">status menu</label>
        <br>
        <input type="text" name="status">
        <br>
        <label for="">stok</label>
        <br>
        <input type="number" name="stok">
        <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php $conn = null; ?>