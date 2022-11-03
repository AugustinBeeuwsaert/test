<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php
            echo 'Prénom : '.$_POST["pseudo"].'<br>';
            echo 'Email : ' .$_POST["mdp"].'<br>';
            echo 'Age : ' .$_POST["prenom"].'<br>';
            echo 'Sexe : ' .$_POST["email"].'<br>';
            echo 'Pays : ' .$_POST["avatar"].'<br>';
        ?>
    </body>
</html>