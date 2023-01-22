<?php
include_once "Fonction/bdd.php";
include_once "Fonction/inscris.php";
$bdd = bdd();
if (!empty($_POST)) {
    $errors = inscris();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
    <title>Application web</title>
</head>
<body>
    <div class="main">
        <h1>Formulaire D'Inscription</h1>
        <form action="" method="POST">
            <div class="inputBox"><label for="nom">Nom</label><input type="text"placeholder="Votre Nom"name="nom" value="<?php if(isset($_POST["nom"])) echo $_POST["nom"] ?>"></div>
            <div class="inputBox"><label for="prenom">Prénom</label><input type="text" placeholder="Votre Prenom"name="prenom" value="<?php if(isset($_POST["prenom"])) echo $_POST["prenom"] ?>"></div>
            <div class="inputBox"><label for="tel">Telephone</label><input type="text" placeholder="Votre Numero"name="numero" value="<?php if(isset($_POST["numero"])) echo $_POST["numero"] ?>"></div>
            <div class="inputBox"><label for="email">Adresse email</label><input type="email" placeholder="Votre email"name="email" value="<?php if(isset($_POST["email"])) echo $_POST["email"] ?>"></div>
            <input type="submit" value="Valider">
            <div class="msgError">
            <?php
            if (isset($errors)) :
            if ($errors) :
            foreach ($errors as $error) : 
            ?>
            
                <div class="msgBad"><?= $error?></div>;
            <?php
            endforeach;
            else:
            ?>
                <div class="msgGood">Vous êtes inscris</div>
            <?php
            endif;
            endif;
            ?>
            </div>
            <a href="participants.php" >Voir la liste des participants</a>
        </form>

       
    </div>
</body>
</html>
