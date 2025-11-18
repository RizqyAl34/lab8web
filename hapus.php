<?php
include_once 'koneksi.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID tidak ditemukan!");
}

$sql = "DELETE FROM data_barang WHERE id_barang = '$id'";
$result = mysqli_query($conn, $sql);

header('Location: dasar.php');
exit;   