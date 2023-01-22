<?php
function inscris(){
    global $bdd;
    $validation = true;

    extract($_POST);
    $errors = [];

if (empty($nom) || empty($prenom) || empty($numero) || empty($email)) {
    $validation = false;
    $errors[] = "Tous les champs sont obligatoires !";

}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $validation = false;
    $errors[] ="L'email n'est pas correct!";

}

/*if (existe($email)) {
    $validation =false;
    $errors[]="Vous êtes déja inscris";
}*/


if ($validation) {
    try {
        
    $inscription = $bdd->prepare("INSERT INTO part_inscris(nom,prenom,numero,email) VALUES(:nom,:prenom,:numero,:email)");
    $inscription-> execute([
        "nom" => htmlentities($nom),
        "prenom" => htmlentities($prenom),
        "numero" => htmlentities($numero),
        "email" => htmlentities($email)
    ]);
    } catch (PDOException $th) {
        echo "Quelque chose se passe mal : " .$th->getMessage();//throw $th;
    }

    unset($_POST["nom"]);
    unset($_POST["prenom"]);
    unset($_POST["numero"]);
    unset($_POST["email"]);
}
return $errors;
}

/*function existe($email){
    global $bdd;
    extract($_POST);
    if (!empty($email)) {
        $result = $bdd->prepare("SELECT COUNT(*) FROM part_inscris WHERE email = ? ");
        $result-> execute([$email]);
        $result = $result->fetch[0];  
    }
    return $result;
}*/
