<?php

function bdd(){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=form', 'root', '');
    } catch (PDOException $e) {
        echo "Connexion impossible !:".$e->getMessage();
        die();
    }
    return $bdd;
}

