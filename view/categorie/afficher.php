<?php

require_once 'model/db.php';
require_once 'model/CategorieModel.php';
    $list = listeCategorie();
    $l = mysqli_fetch_all($list);
?>
<button class="btn btn-success" type="button" style="margin-bottom: 25px;"><a href="?p=ajout_categorie"><i class="glyphicon glyphicon-plus"></i>Ajouter</a></button>
<table class='table table-bordered table-striped'>

    <tr>
        <th class='text-primary'>ID</th>
        <th class='text-primary'>LIBELLE</th>
    </tr>
    <?php
    foreach ($l as $item) {
        ?>
        <tr>
            <td class='text-primary'><?= $item[0]?></td>
            <td class='text-primary'><?= $item[1]?></td>
        </tr>
        <?php
    }
    ?>
</table>