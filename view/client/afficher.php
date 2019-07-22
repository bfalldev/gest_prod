<?php

    require_once 'model/db.php';
    require_once 'model/ClientModel.php';
    $list = listeClient();
    $list = mysqli_fetch_all($list);
?>

<table class='table table-bordered table-striped'>
    <tr>
        <th class='text-primary'>Prenom</th>
        <th class='text-primary'>Nom</th>
        <th class='text-primary'>Adresse</th>
        <th class='text-primary'>Telephone</th>
        <th class='text-primary'>Email</th>
    </tr>
    <?php
    foreach ($list as $item) {
        ?>
        <tr>
            <td class='text-primary'><?= $item[1]?></td>
            <td class='text-primary'><?= $item[2]?></td>
            <td class='text-primary'><?= $item[3]?></td>
            <td class='text-primary'><?= $item[4]?></td>
            <td class='text-primary'><?= $item[5]?></td>
        </tr>
        <?php
    }
    ?>

</table>