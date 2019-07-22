<?php

    require_once 'model/db.php';
    require_once 'model/produitModel.php';
    $list = listeProduit();
    $list_prod = mysqli_fetch_all($list);
?>
<table class='table table-bordered table-striped'>
    <tr>
        <th class='text-primary'>CODE</th>
        <th class='text-primary'>LIBELLE</th>
        <th class='text-primary'>QUANTITE</th>
        <th class='text-primary'>PRIX UNITAIRE</th>
        <th class='text-primary'>CATEGORIE</th>
        <th class='text-primary'>MONTANT EN STOCK</th>
    </tr>
    <?php
    foreach ($list_prod as $item) {
        ?>
        <tr>
            <td class='text-primary'><?= $item[1]?></td>
            <td class='text-primary'><?= $item[2]?></td>
            <td class='text-primary'><?= $item[3]?></td>
            <td class='text-primary'><?= $item[4]?></td>
            <td class='text-primary'><?= $item[6]?></td>
            <td class='text-primary'><?= $item[3]*$item[4]?></td>
        </tr>
        <?php
    }
    ?>

</table>