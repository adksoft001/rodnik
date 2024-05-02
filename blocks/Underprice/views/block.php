<?php

/*
 * 2021 Jan 31
 * File: block.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

use yii\helpers\Url;

/* $detailing boolean */

?>
<div class="block5">
    <div class="container ">
        <div class="block1-btnwrap block1-btnwrap-underprice">
            <div class="mbtn mbtnot modal-form-open" data-name="Получить консультацию" data-type="diagnostic">Диагностика</div>
            <div class="mbtn mbtnot modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</div>
            <?php if ($detailing) : ?>
            <div class="mbtn mbtnot modal-form-open" data-name="Записаться на детейлинг" data-type="detaling">Записаться на детейлинг</div>
            <?php else: ?>
            <div class="mbtn mbtnot modal-form-open" data-name="Заявка на эвакуатор" data-type="evacuator">Заявка на эвакуатор</div>
            <?php endif; ?>
        </div>
    </div>
</div>