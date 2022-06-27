<?php
require_once '../koneksi.php';

$id_game = isset($_POST['id_game']) ? $_POST['id_game'] : '';
$title = isset($_POST['title']) ? $_POST['title'] : '';
$developer = isset($_POST['developer']) ? $_POST['developer'] : '';
$publisher = isset($_POST['publisher']) ? $_POST['publisher'] : '';
$release_date = isset($_POST['release_date']) ? $_POST['release_date'] : '';
$rating = isset($_POST['rating']) ? $_POST['rating'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO list (id_game, title, developer, publisher, release_date, rating) VALUES ('$id_game', '$title', '$developer', '$publisher', '$release_date', '$rating')";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;