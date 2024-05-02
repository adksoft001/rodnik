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
        <br>
        <br>
        <?php if ($serviceId !== 306): ?>
            <div class="block1-btnwrap block1-btnwrap-underprice">
                <div class="mbtn mbtnot modal-form-open" data-name="Получить консультацию" data-type="diagnostic">
                    Диагностика
                </div>
                <div class="mbtn mbtnot modal-form-open" data-name="Получить консультацию" data-type="consultation">
                    Получить консультацию
                </div>
                <div class="mbtn mbtnot modal-form-open" data-name="Заявка на эвакуатор" data-type="evacuator">Заявка на
                    эвакуатор
                </div>
            </div>
        <?php else: ?>
            <div class="block1-btnwrap block1-btnwrap-underprice">
                <div class="mbtn mbtnot modal-form-open" data-name="Получить консультацию" data-type="diagnostic">
                    Получить консультацию
                </div>
                <div class="mbtn mbtnot modal-form-open" data-name="Получить консультацию" data-type="consultation">
                    Записаться
                </div>
                <div class="mbtn mbtnot modal-form-open" data-name="Узнать стоимость" data-type="evacuator">Узнать стоимость
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>