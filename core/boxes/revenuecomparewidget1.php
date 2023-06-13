<?php
// Inclusion du fichier de la classe mère
require_once DOL_DOCUMENT_ROOT.'/core/modules/modRevenueCompare.class.php';

// Instanciation de la classe mère
$modRevenueCompare = new modRevenueCompare($db);

// Récupération des données nécessaires
// $currentRevenue = $modRevenueCompare->getCurrentRevenue();
// $revenueEvolution = $modRevenueCompare->getRevenueEvolution();

// Affichage du widget
?>
<div class="box-flex-item">
    <div class="box-flex-item-with-margin">
        <div class="info-box">
            <span class="info-box-icon bg-revenue">
                <i class="fa fa-money"></i>
            </span>
            <div class="info-box-content">
                <div class="info-box-title">Chiffre d'affaires</div>
                <div class="info-box-value">
                    <!-- <?php echo $currentRevenue; ?> -->
                </div>
                <div class="info-box-evolution">
                    <!-- Evolution : <?php echo $revenueEvolution; ?> -->
                </div>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div><!-- /.box-flex-item-with-margin -->
</div><!-- /.box-flex-item -->
