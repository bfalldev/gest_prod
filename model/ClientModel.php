<?php

function addClient($nom, $prenom, $adresse, $telephone, $email){
    $sql = "INSERT into client(nom,prenom,adresse,telephone,email)
                VALUES('".$nom."','".$prenom."','".$adresse."','".$telephone."','".$email."')";
    requeteSQL($sql);
}

function deleteClient($id){
    $sql = "DELETE from client WHERE id= ".$id;
    return requeteSQL($sql);
}

function listeClient()
{
    $sql = "SELECT * from client";
    return requeteSQL($sql);
}

?>