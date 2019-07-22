<?php
if(isset($_POST['valider']))
{
    require_once '../model/db.php';
    require_once '../model/CategorieModel.php';
    addCategorie($_POST['libelle']);

    header("location:../index.php?p=liste_categorie");
}

?>