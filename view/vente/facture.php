<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="../assets/css/print.css" type="text/css" media="print" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css" />
    <title>Document</title>
</head>

<body>
<a href="..?p=faire_vente"><h2>Retour à l'accueil</h2></a>
<div class="container col-md-8 col-md-offset-2" style="margin-top: 25px;">
    <form>
        <input class="btn btn-primary" id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer la facture" />
    </form>
    <table  align="center" class="table table-bordered">
        <tr>
            <td colspan="4"  align="center" >
                <h1 style="color: #0275d8">Sylla baye fall</h1>
                <h2>Tel : 33 111 22 44</h2>
                <h3>Email : nanebaynaaw@gmail.com</h3>
            </td>
        </tr>
        <tr align="left">
            <td colspan="4">
                <p>
                <h3 align="right">Date de Facture : <?= date("Y-m-d") ?></h3><br>
                <h2>Facture No : <?= $nofact ?></h2>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <h2 align="center">Client</h2>
                <p style="font-size: 1.5em" align="right">
                    Mr <?= $prenom ?>  <?= $nom ?> <br>
                    Adresse : <?= $adresse ?> <br>
                    Telephone  : <?= $tel ?> <br>
                    Email  : <?= $email ?>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <h2 align="center">Produit acheté</h2>
            </td>
        </tr>
        <tr>
            <th>Libelle</th>
            <th>Prix Unitaire</th>
            <th>Quantité</th>
            <th>Montant total</th>
        </tr>
        <?php
        foreach ($vent as $p => $q)
        {?>
            <tr style="font-size: 1.3em;">
                <td>
                    <?= getLibelle($p); ?>
                </td>
                <td>
                    <?= getPrice($p); ?>
                </td>
                <td>
                    <?= $q; ?>
                </td><td>
                    <?= getPrice($p)*$q; ?>
                </td>
            </tr>
        <?php    }
        ?>
        <tr>
            <td colspan="4"><h3 align="center">Montant net à payer : <b><?= $netAPayer ?></b></td>
        </tr>
    </table>

</div>


<script type="text/javascript">
    function imprimer_page(){
        window.print();
    }
</script>

</body>
</html>