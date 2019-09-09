<?php

require_once 'model/db.php';
require_once 'model/produitModel.php';
$list = listeProduit();
$list_prod = mysqli_fetch_all($list);
?>
<form class="form" action="controller/VenteController.php" method="post">
    <h3 class="text-success">Donnees relatives au client</h3>
    <div class='form-group'>
        <label class='control-label'>NOM</label>
        <input class='form-control' type='text' name='nom'/>
    </div>

    <div class='form-group'>
        <label class='control-label'>PRENOM</label>
        <input class='form-control' type='text' name='prenom'/>
    </div>

    <div class='form-group'>
        <label class='control-label'>ADRESSE</label>
        <input required='required' class='form-control' type='text' name='adresse' />
    </div>

    <div class='form-group'>
        <label class='control-label'>TELEPHONE</label>
        <input required='required' class='form-control' type='number' name='tel' min="330000000" max="789999999"/>
    </div>

    <div class='form-group'>
        <label class='control-label'>EMAIL</label>
        <input required='required' class='form-control' type='email' name='email'/>
    </div>
    <hr>

    <h3 class="text-success">
        Produit acheté
        <div class="form-group">
            <div class="input-group-btn">
                <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Ajouter</button>
            </div>
        </div>
    </h3>
    <div class="control-group increment">
        <div class="form-group">
            <label class='control-label'>Produit</label>
            <select name="produits[]" class="form-control">
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
            <label class='control-label'>Quantite</label>
            <input class="form-control" id="quantite" type="number" name="quantites[]" placeholder="" max="" required="required">
        </div>
    </div>
    <!--<div class="clone hide disabled">
        <div class="control-group input-group" style="margin-top:10px">
            <div class="form-group" >
                <label class='control-label'>Produit</label>
                <select name="produits[]" class="form-control custom-select-sm">
                    <?php
/*                    foreach ($list_prod as $c) {
                        */?>
                        <option value="<?/*= $c[0] */?>"><?/*= $c[1] */?></option>
                        <?php
/*                    }
                    */?>
                </select>
            </div>
            <div class='form-group'>
                <label class='control-label'>Quantite</label>
                <input type="number" class="form-control" name="quantites[]" required="required">
            </div>
            <div class="form-group">
                <div class="input-group-btn">
                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Enlever</button>
                </div>
            </div>
        </div>
    </div>-->
    <input name="valider" value="Facturer" id="valider" type="submit" class="btn btn-primary">
</form>

<script type="text/javascript">

    $(document).ready(function() {

        $(".btn-success").click(function(){
            var html = $(".increment").html();
            $(".increment").before(html);
        });

        $("body").on("click",".btn-danger",function(){
            $(this).parents(".control-group").remove();
        });

    });

</script>