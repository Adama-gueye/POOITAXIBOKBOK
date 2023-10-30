<?php
session_start();
include('Personne.php');
if(empty($_SESSION))
    header("location:auth.php");
if(isset($_GET['deconnexion'])){
    session_unset();
    header("location:auth.php");
}
    $personne = new Personne();
    
?>
<div>
    <h3>Bienvenue <?php
        echo( $_SESSION['prenom'] . ' ' . $_SESSION['nom']);
        ?></h3>
    <a href="?deconnexion" style="color: danger;">Se déconnecter</a>
</div>

<h1>Liste des Utilisateurs</h1>
<?php $personne->listePersonne();

