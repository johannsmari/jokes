<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/johannsmari/jokes/db/dbConnect.php';
try{
    $sql = 'UPDATE authors SET name = :name WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':name', $_POST['name']);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error updating submitted author.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/johannsmari/jokes/error/error.php';
    exit();
}
?>