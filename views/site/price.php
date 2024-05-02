<?php

/*
 * 24.11.2020
 * File: block.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

/* @var $this yii\web\View */

use app\blocks\MapVMF\MapVMFBlock;
use app\blocks\PricelistROD\PricelistRODBlock;
use app\blocks\UnderpriceROD\UnderpriceRODBlock;
use app\helpers\Specsymbols;
use yii\widgets\Breadcrumbs;

// Получаем данные для главных страниц разделов (и приравненых к таковым)
$currentPage = Yii::$app->controller->currentPage;

// Генерация метатегов
$this->title = $currentPage->getTitle();
$this->registerMetaTag(['name' => 'description', 'content' => Specsymbols::replace($currentPage->getDescription())]);
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


<!-- Начало БЛОКА ПРАЙС-ЛИСТ -->
<?= PricelistRODBlock::block(['h1' => true]); ?>
<!--Конец БЛОКА ПРАЙС-ЛИСТ-->

<!-- Начало подпрайсовый блок -->
<?= UnderpriceRODBlock::block(); ?>
<!-- Конец подпрайсовый блок -->

<!-- Блок Акции начало -->
<?= MapVMFBlock::block(); ?>
<!-- Конец Блока Акции -->
<!-- Конец БЛОКА КАРТА -->