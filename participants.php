<?php
include_once "Fonction/bdd.php";
include_once "Fonction/liste.php";
$bdd = bdd();
$errors = liste();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste des Participants</title>
</head>
<body class="body">
    <div class="listbox">
        <table class="table_liste">
            <div class="title">LISTES DES PARTICIPANTS</div>
            <thead>
                <tr>
                    <th>Nom et Prenom</th>
                    <th>Numero</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($errors as $error):
                $nomComplet = htmlentities($error[0] ." ". $error[1]);
                $num = htmlentities($error[2]);
                $email = htmlentities($error[3]);
                ?>
                <tr>
                    <td><?= $nomComplet?></td>
                    <td><?= $num?></td>
                    <td><?= $email?></td>
                </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
        <a href="index.php" ><< Retour</a>
    </div>
</body>
</html>
