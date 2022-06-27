<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//user
$id_transaksi = isset($_POST['id_transsaksi']) ? $_POST['id_transaksi'] : '';
$id_game = isset($_POST['id_game']) ? $_POST['id_game'] : '';
$id_user = isset($_POST['id_user']) ? $_POST['id_user'] : '';
$title = isset($_POST['title']) ? $_POST['title'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO keranjang (id_transaksi, id_game, id_user, title, jumlah, tanggal) VALUES ('$id_transaksi', '$id_game', '$id_user', '$title', '$jumlah', '$tanggal')";

    $connection -> exec($sql);
    echo "Data berhasil di insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

$connection = null;