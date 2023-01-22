<?php

function liste(){
    global $bdd;
    $resultat = $bdd->prepare("SELECT nom, prenom, numero, email FROM part_inscris");
    $resultat->execute();
    $resultat = $resultat->fetchAll();

    return $resultat;
}