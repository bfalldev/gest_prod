<?php
if(isset($_POST['valider']))
{
    extract($_POST);
    require_once '../model/db.php';
    require_once '../model/produitModel.php';
    $code = strtoupper("ref".str_shuffle($libelle).rand(1000,8000));
    addProduit($code,$libelle,$quantite,$prix,$categorie);

    header("location:../index.php?p=liste_produit");
}

if(isset($_POST['update']))
{
    extract($_POST);
    require_once '../model/db.php';
    require_once '../model/produitModel.php';
    approvProduitQuantite($produit,$quantite);

    header("location:../index.php?p=liste_produit");
}

?>