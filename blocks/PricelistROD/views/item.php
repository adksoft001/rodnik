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

//if(isset(Yii::$app->controller->model) AND !is_null(Yii::$app->controller->model) AND Yii::$app->controller->model->hide_url_price_list == 1) {
//    $itemName = $item->name;
//}else{
//    if(is_null($item->href)) {
//        $itemName = $item->name;
//    } else {
//        $itemName = Html::a($item->name, $item->href);
//    }

//}

?>
<!--<div class="info-text-wrap">-->
<!--    <div class="info-text">-->
<!--        --><?php //if($item[0] == '0'):?>
<!--        <span><a href="/--><?php //=$item[2]; ?><!--"> --><?php //= $item[1]; ?><!--</a> <b>от --><?php //= $item[3] * 1000; ?><!-- р.</b></span>-->
<!--        --><?php //else :?>
<!--            <span> --><?php //= $item[1]; ?><!--<b> от --><?php //= $item[3] * 1000; ?><!-- р.</b></span>-->
<!--        --><?php //endif;?>
<!--    </div>-->
<!--    <div class="info-btn "><span class="mbtn2 modal-form-open" data-name="Запись на ремонт / ТО" data-type="repaire">Записаться</span></div>-->
<!--</div>-->
<li class="calc__descr-item ">
    <div class="calc__descr-name">
        <?php if ($item[0] == '0'): ?>
            <a class="price_path" href="/<?= $item[2]; ?>/"><?= $item[1]; ?></a>
        <?php else : ?>
            <span> <?= $item[1]; ?></span>
        <?php endif; ?>
    </div>
    <div class="calc__descr-value">От <?= $item[3] * 1000; ?> <span>₽</span></div>
</li>