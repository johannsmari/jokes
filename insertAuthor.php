<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/johannsmari/jokes/db/dbConnect.php';
try{
    $sql = 'INSERT INTO authors SET name = :name';
    $s = $pdo->prepare($sql);
    $s->bindValue(':name', $_POST['name']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error adding submitted author.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/johannsmari/jokes/error/error.php';
    exit();
}
?>