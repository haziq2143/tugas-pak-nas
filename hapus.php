<?php
require_once './koneksi.php';
$conn = getConn();
$id = $_GET['id'];

$sql = "DELETE FROM `menu` WHERE id_menu = :id";
$result = $conn->prepare($sql);
$result->bindParam('id', $id);
$result->execute();

header("Location: index.php");
