<?php

include('IPersonne.php');
class Personne implements IPersonne {
    private $conn;
    private $erreur;
    private $erreur2;
    public function __construct() {
        $this->connectBD();
    }
    function connectBD() {
        $SERVER="localhost"; 
        $BD="taxibokbok"; 
        $USER="root"; 
        $MDP=""; 
        $bdcon='mysql:host='.$SERVER.';dbname='.$BD.';charset=utf8';
        $option=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
        try {
             $this->conn=new PDO($bdcon,$USER,$MDP,$option);
        } catch (PDOException $th) {
            die("Erreur de connexion :".$th->getMessage());
        }
        
    }

    function inscrire($nom,$prenom,$email,$mdp,$tel,$confirmation) {
        $conn =$this->conn;
        if(empty($email)|| empty($mdp)|| empty($nom)||empty($prenom)||empty($tel)||empty($confirmation)){
            $this->erreur[]= "Tout les champs sont obligatoires";
        }elseif($mdp!==$confirmation){
                $this->erreur[]= "le mot de passe n'est pas identique";
           }elseif(strlen($mdp)<8){
                $this->erreur[] = "Le mot de passe doit etre supérieur ou egal a 8 caractéres";
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->erreur[] = "L'adresse e-mail n'est pas valide.";
        }
        elseif((!(preg_match("/^(77|78|76|75)+[0-9]/", $tel)) || strlen($tel)!=9)){
            $this->erreur[]= "Veuillez enregistré un numéro de téléphone valide";
        }elseif((!(preg_match('/[a-zA-Zéè]$/', $nom)))||(!(preg_match('/[a-zA-Zéè]$/', $prenom))) || strlen($nom)<2 || strlen($prenom)<3){
            $this->erreur[]= "Une erreur s'est produite sur la saisie de votre nom ou de votre prénom";
        }
        else{
        $req = "INSERT INTO user(id,nom,prenom,email,password,tel) VALUES (NULL,'$nom','$prenom','$email','$mdp','$tel')";
        $resul = $conn->exec($req);
        echo "<h3 style='text-align : center; color : green'>Votre inscription a été bien passer</h3>"; 
        }
        echo "<h3 style='text-align : center; color : red'>".implode(". ",$this->erreur)."</h3>";
    }

    function connexion($emailAuth, $mdpAuth)
    {
        $conn = $this->conn;
        if(empty($emailAuth)|| empty($mdpAuth))
            { $this->erreur2[]= "Tout les champs sont obligatoires";
            }
            elseif(!(preg_match('/[-0-9a-zA-Z.+_à^]+@[-0-9a-zA-Z.+_]+.[a-z]{2,4}/', $emailAuth))) {
                $this->erreur2[]= "Veuillez enregistré un bon mail";
            }else{
                $req = "SELECT * FROM user where email = '$emailAuth' and password = '$mdpAuth'";
                $resul = $conn->query($req)->fetch();
                if($resul!=null){
                    $_SESSION['id'] = $resul['id'];
                    $_SESSION['nom'] = $resul['nom'];
                    $_SESSION['prenom'] = $resul['prenom'];
                    header("location:index.php");
                }else  $erreur[]= "Login ou Mot de Passe incorrect !";
     }
     echo "<h3 style='text-align : center; color : red'>".implode(". ",$this->erreur2)."</h3>";
        
    }
    function listePersonne() {
        $conn = $this->conn;
        $req = "SELECT * FROM user";
        $resultats = $conn->query($req)->fetchAll();
            ?> 
            <table> 
                <th>Nom</th>
                <th>Prenom</th>
                <th>Tel</th>
                <th>Email</th>
            </table><?php
        foreach ($resultats as $resultat) { ?>
                <td><?=$resultat['nom']?></td>
                <td><?=$resultat['prenom']?></td>
                <td><?=$resultat['tel']?></td>
                <td><?=$resultat['email']?></td>
            <?php
        }
    }
}

