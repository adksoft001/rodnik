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
use app\blocks\OurPhoto\OurPhotoBlock;
use app\blocks\OurSercificate\OurSercificateBlock;
use app\blocks\Pricelist\PricelistBlock;
use app\blocks\Promo\PromoBlock;
use app\blocks\RaitingROD\RaitingRODBlock;
use app\blocks\RepareCar\RepareCarBlock;
use app\blocks\Underprice\UnderpriceBlock;

// Генерация метатегов
$this->title = $service->name . ' ' . $brand->name . ' ' . $model->name . ' ' . $model->rus_name . ' цена в Евпатории | Автосервис ' . $brand->name . ' СТО Родник';
$this->registerMetaTag(['name' => 'description', 'content' => $service->name . ' ' . $brand->name . ' ' . $model->name . ' ' . $model->rus_name . ' ✅ Крупнейший автосервис в Евпатории. ✅ Доступные цены. ✅ Гарантия 6 месяцев.']);
$this->params['serviceGroupId'] = $service;
?>

<!-- Первый блок начало -->
<?= PromoBlock::block([
    'serviceName' => $service->name,
    'brandName' => $brand->name . ' ' . $model->name . ' ' . $model->rus_name,
]); ?>
<!-- Конец Первый блок -->

<?php if ($service->parent_id == 306 || $service->url == 'detejling'): ?>
    <!-- Блок РЕМОНТ АВТО начало -->
    <?= RepareCarBlock::block([
        'brand' => $brand,
        'model' => $model,
    ]); ?>
    <!-- Конец Блока РЕМОНТ АВТО -->
<?php else: ?>
    <!-- Блок Наши работы начало -->
    <?= OurPhotoBlock::block(); ?>
    <!-- Конец Блока Наши работы -->
<?php endif; ?>


<!-- Блок Акции начало -->
<?= CampaignsRODBlock::block(); ?>
<!-- Конец Блока Акции -->

<!-- Начало БЛОКА ПРАЙС-ЛИСТ -->
<?= PricelistBlock::block([
    'service' => $service,
    'model' => $model,
    'brand' => $brand
]); ?>
<!--Конец БЛОКА ПРАЙС-ЛИСТ-->

<!-- Начало подпрайсовый блок -->
<?= UnderpriceBlock::block([
    'brand' => $brand,
    'detailing' => ($service->type == 'detailing'),
]); ?>

<!-- Начало рейтинга блок -->
<?= RaitingRODBlock::block(
    ['serviceParentId' => $service->parent_id]
); ?>
<!-- Конец рейтинга блок -->

<!-- Блок Наши работы начало -->
<?= OurSercificateBlock::block(
    ['serviceParentId' => $service->parent_id]
); ?>
<!-- Конец Блока Наши работы -->

<!-- Блок Акции начало -->
<?= MapVMFBlock::block([
    'brandName' => $brand->name,
]); ?>
<!-- Конец Блока Акции -->