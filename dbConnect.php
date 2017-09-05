<?php
    try{
    $pdo = new PDO('mysql:host=localhost;dbname=johannsmari', 'johannsmari', 'Pabbi1978)');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf-8"');
    }

    catch (PDOException $e){
        $error = "unable to connect to the database" . $e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/johannsmari/jokes/error/error.php';
        exit();
    }
?>