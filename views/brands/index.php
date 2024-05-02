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

use app\blocks\PromoVMF\PromoVMFBlock;
use app\blocks\Contacts\ContactsBlock;
use yii\widgets\Breadcrumbs;
use app\blocks\Brandslider\BrandsliderBlock;
use app\helpers\Subdomains;

// Получаем данные для главных страниц разделов (и приравненых к таковым)
$currentPage = Yii::$app->controller->currentPage;

// Генерация метатегов
$this->title = $currentPage->getTitle();
$this->registerMetaTag(['name' => 'description', 'content' => $currentPage->getDescription()]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $currentPage->getKeywords()]);


if (Subdomains::getStatus() == false) {
    // Хлебные крошки
    $this->params['breadcrumbs'][] = $currentPage->name;
} else {

}
// Canonical
$this->params['canonical'] = $currentPage->url;

?>
<!-- Первый блок начало -->
<?= PromoVMFBlock::block([
    'h1' => $currentPage->header
]); ?>
<!-- Конец Первый блок -->

<div class="breadcrumbs">
    <div class="container container2">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>

<!-- Блок со слайдером марок авто начало -->
<?= BrandsliderBlock::block(); ?>
<!-- Конец Блок со слайдером марок авто -->

<!-- БЛОК КАРТА начало -->
<?= ContactsBlock::block(); ?>
<!-- Конец БЛОКА КАРТА -->