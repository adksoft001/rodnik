<?php

/*
 * 02.12.2020
 * File: block.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

use yii\helpers\Html;

?>
<div class="accordion_anchor" id="header_pricelist">
<div class="block5">
    <div class="container ">

        <?php if(!$brandName ): ?>
            <h1 class="zag">Прайс лист на ремонт и обслуживание авто</h1>
        <?php elseif($modelName): ?>
            <h2 class="zag">Pемонт и обслуживание <?= $brandName .' '. $modelName; ?> цена:</h2>
        <?php elseif ($serviceName): ?>
            <h2 class="zag"><?= $serviceName ?>  <?= $brandName; ?> цена:</h2>
        <?php else: ?>
            <h2 class="zag">Pемонт и обслуживание <?= $brandName; ?> цена:</h2>
        <?php endif; ?>

        <div class="accordion">
            <?= $groups; ?> 
        </div>
    </div>
</div>
</div>