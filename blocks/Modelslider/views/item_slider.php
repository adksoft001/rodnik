<?php

/* 
 * 24.11.2020
 * File: item.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */
$url = $item->url;

?>
<a href="/<?= $url; ?>/" class="markiblock-card">
    <span class="markiblock-card-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-lazy="/uploads/images/cars/<?= mb_strtolower($item->url); ?>/small.png" alt="<?= $item->name; ?>"></span>
    <span class="markiblock-card-zag"><?= $item->name; ?></span>
</a>