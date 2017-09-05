<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/johannsmari/jokes/db/dbConnect.php';

try{
    $sql = 'DELETE FROM authors WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch(PDOException $e){
    $error = 'Error deleting author.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/johannsmari/jokes/error/error.php';
    exit();
}
?>