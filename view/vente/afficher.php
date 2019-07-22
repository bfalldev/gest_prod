<?php

    require_once 'model/db.php';
    require_once 'model/VenteModel.php';
    $list = listeVente();
    $list = mysqli_fetch_all($list);
?>
<H2>
    Liste des dernieres ventes
</H2>
<table class='table table-bordered table-striped'>
    <tr>
        <th class='text-primary'>Client</th>
        <th class='text-primary'>Adresse</th>
        <th class='text-primary'>Telephone</th>
        <th class='text-primary'>Date de vente</th>
    </tr>
    <?php
    foreach ($list as $item) {
        ?>
        <tr>
            <td class='text-primary'><?= $item[1]?> <?= $item[2]?></td>
            <td class='text-primary'><?= $item[3]?></td>
            <td class='text-primary'><?= $item[4]?></td>
            <td class='text-primary'><?= $item[10]?></td>
        </tr>
        <?php
    }
    ?>

</table>