<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//user
$id_user = isset($_POST['id_user']) ? $_POST['id_user'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$telp = isset($_POST['telp']) ? $_POST['telp'] : '';
$region = isset($_POST['region']) ? $_POST['region'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO user (id_user, username, alamat, telp, region, password) VALUES ('$id_user', '$username', '$alamat', '$telp', '$region', '$password')";



    $connection -> exec($sql);
    echo "Data berhasil di insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

$connection = null;