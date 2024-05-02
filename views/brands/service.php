<?php

/*
 * 03.12.2020
 * File: service.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

use app\blocks\CampaignsROD\CampaignsRODBlock;
use app\blocks\MapVMF\MapVMFBlock;
use app\blocks\Modelslider\ModelsliderBlock;
use app\blocks\OurSercificate\OurSercificateBlock;
use app\blocks\Pricelist\PricelistBlock;
use app\blocks\Promo\PromoBlock;
use app\blocks\RaitingROD\RaitingRODBlock;
use app\blocks\RepareCar\RepareCarBlock;
use app\blocks\Underprice\UnderpriceBlock;
use app\blocks\UnderpriceROD\UnderpriceRODBlock;
use app\helpers\Subdomains;
use yii\widgets\Breadcrumbs;

// Генерация метатегов
//$this->title = $core->getTitle($service->title, true);
$this->title = $core->getTitle($service->name .' '. $brand->name . ' ' . $brand->rus_name . ' цена в Евпатории | Автосервис «СТО Родник»', true);
$this->registerMetaTag(['name' => 'description', 'content' => $service->name .' '. $brand->name . ' ✅ Крупнейший автосервис в Евпатории. ✅ Доступные цены. ✅ Гарантия 6 месяцев.']);


?>


<div class="breadcrumbs">
    <div class="container container2">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>

<!-- Первый блок начало -->
<?= PromoBlock::block([
    'serviceName' => $service->name,
    'brandName' => $brand->name . ' ' . $brand->rus_name,
]); ?>
<!-- Конец Первый блок -->
<!-- Блок РЕМОНТ АВТО начало -->
<?= RepareCarBlock::block([
    'brand' => $brand,
    'subdomain' => Subdomains::getStatus()
]); ?>
<!-- Конец Блока РЕМОНТ АВТО -->
<!-- Блок со слайдером моделей авто начало -->
<?= ModelsliderBlock::block([
    'brand' => $brand,
    'subdomain' => Subdomains::getStatus()
]); ?>
<!-- Конец Блок со слайдером моделей авто -->

<!-- Блок Акции начало -->
<?= CampaignsRODBlock::block(); ?>
<!-- Конец Блока Акции -->

<!-- Начало БЛОКА ПРАЙС-ЛИСТ -->
<?php //= PricelistRODBlock::block([
//    'brand' => $brand,
//    'serviceName' => $service->name,
//    'brandName' => $brand->name . ' ' . $brand->rus_name,
//    'service' => $service
//
//]); ?>
<?= PricelistBlock::block([
    'service' => $service
]); ?>
<!--Конец БЛОКА ПРАЙС-ЛИСТ-->

<!-- Начало подпрайсовый блок -->
<?= UnderpriceBlock::block([
    'brand' => $brand,
    'detailing' => ($service->type == 'detailing'),
]); ?>

<!-- Начало рейтинга блок -->
<?= RaitingRODBlock::block(); ?>
<!-- Конец рейтинга блок -->

<!-- Блок Наши работы начало -->
<?= OurSercificateBlock::block(); ?>
<!-- Конец Блока Наши работы -->

<!-- Блок Акции начало -->
<?= MapVMFBlock::block([
    'brandName' => $brand->name,
]); ?>
<!-- Конец Блока Акции -->