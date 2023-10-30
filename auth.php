<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Taxi</title>
</head>
<?php
session_start();
$erreur=[];
$erreur2=[];
include('Personne.php');
global $conn;
global $erreur;
global $erreur2;
$personne = new Personne();

if (isset($_POST['submit'])) {
    extract($_POST);
    $personne->connexion($emailAuth, $mdpAuth);
}
     
if(isset($_POST['inscription'])){
    extract($_POST);
    $personne->inscrire($nom,$prenom,$email,$mdp,$tel,$confirmation);
}
  

?>
<body>
    <div class="container">
        <div class="gauche">
            <form action="" id="form1" method="post">
                <p id="p1"><h4>Authentification</h4> <br> Votre chauffeur en un clic</p><br>
                <a id="button2" href=""><b>S'inscrire</b></a>
                <p>------------------------------------OU------------------------------------</p>
                <label for="">Email</label><br>
                <input type="text" placeholder="Adresse e-mail ou numéro de tél" name="emailAuth"><br>
                <label for="">Mot de Passe</label><br>
                <input type="password" placeholder="Mot de passe" name="mdpAuth">><br>
                <div class="container2">
                    <div>
                        <p>j'ai déjà un compte</p>
                    </div>
                    <div>
                        <button id="button1" type="submit" name="submit"><b>Connexion ➡</b></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="droite">
            <form action="" id="form2" method="post">
                <p id="p1"><h4>inscription</h4> <br> Veuillez-vous s'inscrire en rensignant les informations suivantes</p><br>
                <div class="container2">
                    <div>
                        <label for="">Prénom</label><br>
                        <input type="text" placeholder="prenom" name="prenom" <?php if($erreur!=[]){?> value="<?=$_POST["prenom"]?>"<?php }else echo ''?>>
                    </div>
                    <div style="margin-left: 60px;">
                        <label for="">Nom</label><br>
                        <input type="text" placeholder="nom" name="nom" <?php if($erreur!=[]){?> value="<?=$_POST["nom"]?>"<?php }else echo ''?>>
                    </div>
                </div>
                <label for="">Téléphone</label><br>
                <input type="text" placeholder="+221 77 500 31 08" name="tel" <?php if($erreur!=[]){?> value="<?=$_POST["tel"]?>"<?php }else echo ''?>><br>
                <label for="">Email</label><br>
                <input type="text" placeholder="Adresse e-mail" name="email" <?php if($erreur!=[]){?> value="<?=$_POST["email"]?>"<?php }else echo ''?>><br>
                <label for="">Mot de Passe</label><br>
                <input type="password" placeholder="Mot de passe" name="mdp" <?php if($erreur!=[]){?> value="<?=$_POST["mdp"]?>"<?php }else echo ''?>><br>
                <label for="">Confirmation</label><br>
                <input type="password" placeholder="Confirmation" name="confirmation" <?php if($erreur!=[]){?> value="<?=$_POST["confirmation"]?>"<?php }else echo ''?>><br>
                <button id="button1" name="inscription" type="submit"><b>S'inscrire ➡</b></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
