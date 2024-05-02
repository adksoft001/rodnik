<?php

/*
 * 03.12.2020
 * File: index.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

use app\blocks\ServicesROD\ServicesRODBlock;
use yii\widgets\Breadcrumbs;
use app\blocks\Promo\PromoBlock;
use app\blocks\Services\ServicesBlock;
use app\blocks\PricelistROD\PricelistRODBlock;
use app\blocks\UnderpriceROD\UnderpriceRODBlock;
use app\blocks\MapVMF\MapVMFBlock;

// Получаем данные для главных страниц разделов (и приравненых к таковым)
$currentPage = Yii::$app->controller->currentPage;

// Генерация метатегов
$this->title = $currentPage->getTitle();
$this->registerMetaTag(['name' => 'description', 'content' => $currentPage->getDescription()]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $currentPage->getKeywords()]);

// Хлебные крошки
$this->params['breadcrumbs'][] = $currentPage->name;

// Canonical
$this->params['canonical'] = $currentPage->url;

?>

<div class="breadcrumbs">
    <div class="container container2">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>

<!-- Блок Цены начало -->
<?= ServicesRODBlock::block(
    ['currentPage' => $currentPage]
); ?>
<!-- Конец Блок Цены -->
