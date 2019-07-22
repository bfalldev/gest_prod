<?php
$home = "index.php";
?>
<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion produit</title>
</head>
<body>
    <div class="container" style="margin-top: 80px;
        margin-bottom: 100px;">
        <?php
            require_once 'view/menu.php';
        ?>
        <h1 class="text-center">GESTION PRODUIT</h1>

        <?php
            require_once 'view/sidebar.php';
        ?>

        <div class="col-md-9" STYLE="border-left: #025aa5 solid; ">
            <?php

            if(isset($_GET['p']))
            {
                switch ($_GET['p'])
                {
                    case "ajout_categorie":
                        require_once "view/categorie/ajouter.php";
                        break;

                    case "liste_categorie":
                        require_once "view/categorie/afficher.php";
                        break;

                    case "ajout_produit":
                        require_once "view/produit/ajouter.php";
                        break;

                    case "liste_produit":
                        require_once "view/produit/afficher.php";
                        break;
                    case "liste_vente":
                        require_once "view/vente/afficher.php";
                        break;
                    case "approv_stock":
                        require_once "view/stock/ajouter.php";
                        break;
                    case "liste_client":
                        require_once "view/client/afficher.php";
                        break;

                    case "faire_vente":
                        require_once "view/vente/vente.php";
                        break;


                }
            }else{
                require_once "view/vente/afficher.php";
            }

            ?>
        </div>
    </div>
</body>
</html>