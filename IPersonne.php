<?php

interface IPersonne{
    public function inscrire($nom,$prenom,$email,$mdp,$tel,$confirmation);
    public function connexion($emailAuth,$mdpAuth);
    public function listePersonne();
}