<?php

    function addVente($client,$produit,$quantite){
        $sql = "INSERT into vente(client,produit,quantite) VALUES(".$client.",".$produit.",".$quantite.")";
        requeteSQL($sql);
    }

    function deleteVente($id){
        $sql = "DELETE from vente WHERE id= ".$id;
        return requeteSQL($sql);
    }

    function listeVente()
    {
        $sql = "SELECT * FROM client c join `vente` v on(v.client=c.id)";
        return requeteSQL($sql);
    }

?>