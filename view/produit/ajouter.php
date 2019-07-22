<?php
    require_once 'model/db.php';
    require_once 'model/CategorieModel.php';
    $list = listeCategorie();
    $l = mysqli_fetch_all($list);
?>
<form action="controller/produitController.php" method="post">
    <div class='form-group'>
        <label class='control-label'>Libelle du produit</label>
        <input required='required' class='form-control' type='text' name='libelle'/>
    </div>

    <div class='form-group'>
        <label class='control-label'>QUANTITE ACHETEE</label>
        <input required='required' class='form-control' type='number' name='quantite' min='1'/>
    </div>

    <div class='form-group'>
        <label class='control-label'>PRIX UNITAIRE</label>
        <input required='required' class='form-control' type='number' name='prix' min='1'/>
    </div>

    <div class='form-group'>
        <label class='control-label'>CATEGORIE</label>
        <SELECT class='form-control' name="categorie">
            <?php
                foreach ($l as $c) {
            ?>
            <option value="<?= $c[0] ?>"><?= $c[1] ?></option>
            <?php
            }
            ?>
        </SELECT>
    </div>
    <input name="valider" value="valider" type="submit" class="btn btn-primary">
</form>