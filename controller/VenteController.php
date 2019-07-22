<?php
if(isset($_POST['valider']))
{
    require_once "../model/db.php";
    require_once "../model/ClientModel.php";
    require_once "../model/produitModel.php";
    require_once "../model/VenteModel.php";
    extract($_POST);

    addClient($nom,$prenom,$adresse,$tel,$email);
    $client = lastInsertId('client');
    $vent = array_combine($produits, $quantites);
    $netAPayer = 0;

    foreach ($vent as $p => $q)
    {
        $netAPayer += (getPrice($p) * $q);
        addVente($client,$p,$q);
        updateProduitQuantite($p, $q);
    }

    $nofact = strtoupper("Fact".date("y-m-d").rand(100,500));

    require_once "../view/vente/facture.php";

    //header("location:../index.php?p=liste_vente");

}


?>