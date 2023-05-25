<?php
require_once './koneksi.php';
$conn = getConn();

$sql = "SELECT * FROM menu";
$result = $conn->prepare($sql);
$result->execute();
$hasil = $result->fetchAll();


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
    <table border="1px">
        <tr>
            <th>Nama Menu</th>
            <th>Harga Menu</th>
            <th>Foto Menu</th>
            <th>status Menu</th>
            <th>stok Menu</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($hasil as $h) : ?>
            <tr>
                <td><?= $h['nama_menu'] ?></td>
                <td><?= $h['harga_menu'] ?></td>
                <td><?= $h['foto_menu'] ?></td>
                <td><?= $h['status_menu'] ?></td>
                <td><?= $h['stok_menu'] ?></td>
                <td>
                    <a href="http://localhost/tugas-pak-nas/ubah.php?id=<?= $h['id_menu'] ?>">Ubah</a>
                    <a href="http://localhost/tugas-pak-nas/hapus.php?id=<?= $h['id_menu'] ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <a href="tambah.php">tambah</a>
</body>

</html>
<?php $conn = null; ?>