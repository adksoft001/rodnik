<?php

/*
 * 03.12.2020
 * File: item.php
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
use app\blocks\PricelistROD\PricelistRODBlock;
use app\blocks\Promo\PromoBlock;
use app\blocks\PromoVMF\PromoVMFBlock;
use app\blocks\RaitingROD\RaitingRODBlock;
use app\blocks\RepareCar\RepareCarBlock;
use app\blocks\UnderpriceROD\UnderpriceRODBlock;
use app\helpers\Subdomains;



// Генерация метатегов
$this->title = $core->getTitle('Ремонт ' . $brand->name . ' ' . $brand->rus_name . ' цена в Евпатории | Автосервис ' . $brand->name . ' СТО Родник', true);
$this->registerMetaTag(['name' => 'description', 'content' => 'Крупнейший автосервис ' . $brand->name . ' в Евпатории. ✅ Ремонт и обслуживание ' . $brand->rus_name . '. ✅ Свой магазин автозапчастей. ✅ Гарантия 6 месяцев. ⏰ Записаться в техцентр ' . $brand->name . ' «СТО Родник» ☎️ 8(978)077-62-82.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $core->getKeywords($brand->keywords, true)]);

?>

<!-- Первый блок начало -->
<?= PromoBlock::block([
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

<!--Блов КМВ-->
<?= PromoVMFBlock::block([
    'brand' => $brand,
]); ?>
<!--Блок ВМФ конец-->

<!-- Блок Акции начало -->
<?= CampaignsRODBlock::block(); ?>
<!-- Конец Блока Акции -->

<!-- Начало БЛОКА ПРАЙС-ЛИСТ-->
<?= PricelistRODBlock::block([
    'brand' => $brand
]); ?>
<!--Конец БЛОКА ПРАЙС-ЛИСТ-->

<!-- Начало подпрайсовый блок -->
<?= UnderpriceRODBlock::block(); ?>
<!-- Конец подпрайсовый блок -->

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