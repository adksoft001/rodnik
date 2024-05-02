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

use yii\helpers\Html;
//use Yii;

if(isset(Yii::$app->controller->model) AND !is_null(Yii::$app->controller->model) AND Yii::$app->controller->model->hide_url_price_list == 1) {
    $itemName = $item->name;
}else{
    if(is_null($item->href)) {
        $itemName = $item->name;
    } else {
        $itemName = Html::a($item->name, $item->href);
    }
}
//var_dump($item->status);
?>
<?php if ($item->status) : ?>
<!--<div class="info-text-wrap">-->
<!--    <div class="info-text">-->
<!--        <span>--><?php //= $itemName; ?><!-- <b> от --><?php //= $item->price; ?><!-- р.</b></span>-->
<!--    </div>-->
<!--    <div class="info-btn "><span class="mbtn2 modal-form-open" data-name="Запись на ремонт / ТО" data-type="repaire">Записаться</span></div>-->
<!--</div>-->
    <li class="calc__descr-item ">
        <div class="calc__descr-name">
            <?= $itemName; ?>
        </div>
        <div class="calc__descr-value">От  <?= $item->price; ?> <span>₽</span></div>
    </li>
<?php endif; ?>