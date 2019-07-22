<?php

    function addCategorie($libelle){
        $sql = "INSERT into categorie(libelle) VALUES('".$libelle."')";
        requeteSQL($sql);
    }

    function deleteCategorie($id){
        $sql = "DELETE from categorie WHERE id= '".$id."'";
        return requeteSQL($sql);
    }

    function updateCategorie($id, $libelle){
        $sql = "Update categorie set libelle='".$libelle."' WHERE id=".$id;
        return requeteSQL($sql);
    }

    function listeCategorie()
    {
        $sql = "SELECT * from categorie";
        return requeteSQL($sql);
    }

?>