<?php

require_once 'model/db.php';
require_once 'model/produitModel.php';
$list = listeProduit();
$list_prod = mysqli_fetch_all($list);
?>
<form action="controller/produitController.php" method="post">
    <div class="form-group">
        <label class='control-label'>Produit</label>
        <select name="produit" class="form-control custom-select-sm">
            <?php
            foreach ($list_prod as $c) {
                ?>
                <option value="<?= $c[0] ?>"><?= $c[2] ?></option>
                <?php
            }
            ?>
        </select>
    </div>

    <div class='form-group'>
        <label class='control-label'>QUANTITE A AJOUTEE</label>
        <input required='required' class='form-control' type='number' name='quantite' min='1'/>
    </div>

    <input name="update" value="Mettre à jour" type="submit" class="btn btn-primary">
</form>