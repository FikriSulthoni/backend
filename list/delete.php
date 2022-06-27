<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_game = $_POST['id_game'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM list WHERE `id_game`= '$id_game'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;