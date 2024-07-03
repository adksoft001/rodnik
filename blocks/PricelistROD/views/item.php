<?php

/*
 * 02.12.2020
 * File: item.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

?>
<li class="calc__descr-item ">
    <div class="calc__descr-name">
        <a class="price_path" href="/<?= $item[2]; ?>/"><?= $item[1]; ?></a>
    </div>
    <div class="calc__descr-value">От <?= $item[3] * 1000; ?> <span>₽</span></div>
</li>