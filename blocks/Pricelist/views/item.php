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

if (isset(Yii::$app->controller->model) and !is_null(Yii::$app->controller->model) and Yii::$app->controller->model->hide_url_price_list == 1) {
    $itemName = $item->name;
} else {
    if (is_null($item->href)) {
        $itemName = $item->name;
    } else {
        $itemName = Html::a($item->name, $item->href);
    }
}
?>
<?php if ($item->status) : ?>
    <li class="calc__descr-item ">
        <div class="calc__descr-name">
            <?= $itemName; ?>
        </div>
        <div class="calc__descr-value">От <?= $item->price; ?> <span>₽</span></div>
    </li>
<?php endif; ?>