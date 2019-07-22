<?php

    function addProduit($code, $libelle, $quantite, $prix, $categorie){
        $sql = "INSERT into produit(code,libelle,quantite,prix,categorie)
                VALUES('".$code."','".$libelle."',".$quantite.",".$prix.",".$categorie.")";
        requeteSQL($sql);
    }
    
    function deleteProduit($id){
        $sql = "DELETE from produit WHERE id= ".$id;
        return requeteSQL($sql);
    }
    
    function updateProduit($id,$code, $libelle, $quantite, $prix, $categorie){
        $sql = "Update produit set 
                    code='".$code."',
                    libelle='".$libelle."',
                    quantite=".$quantite.",
                    prix=".$prix.",
                    categorie=".$categorie.",
                 WHERE id=".$id;
        return requeteSQL($sql);
    }

    function updateProduitQuantite($id,$quantite){
        $sql = "Update produit set quantite=quantite-".$quantite." WHERE id=".$id;
        return requeteSQL($sql);
    }

    function approvProduitQuantite($id,$quantite){
        $sql = "Update produit set quantite=quantite+".$quantite." WHERE id=".$id;
        return requeteSQL($sql);
    }
    
    function listeProduit()
    {
        $sql = "SELECT p.id, p.code, p.libelle, p.quantite, p.prix, c.id, c.libelle as categorie from produit p join categorie c on(p.categorie=c.id)";
        return requeteSQL($sql);
    }

    function quantiteMax()
    {
        $sql = "SELECT max(quantite) from produit";
        return requeteSQL($sql);
    }

    function quantiteMin()
    {
        $sql = "SELECT min(quantite) from produit";
        return requeteSQL($sql);
    }

    function getPrice($id)
    {
        $sql = "SELECT prix from produit where id=".$id;
        $rs = mysqli_fetch_row(requeteSQL($sql));
        return $rs[0];
    }
    function getLibelle($id)
    {
        $sql = "SELECT libelle from produit where id=".$id;
        $rs = mysqli_fetch_row(requeteSQL($sql));
        return $rs[0];
    }

?>