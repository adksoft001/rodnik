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

/** $detailing boolean */
/** $mdSize integer */
/** $lgSize integer */

?>
<div class="block cartablock">
    <div class="container">
        <?= $items; ?>
    </div>
    <div class="cartablock-carta">
        <div class="ymap-container">
            <div class="loader loader-default"></div>
            <div id="map-yandex" data-detailing="<?= $detailing ?>"></div>
        </div>
    </div>
</div>