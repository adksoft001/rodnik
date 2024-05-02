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

use app\blocks\Brandslider\BrandsliderBlock;
use app\blocks\CampaignsROD\CampaignsRODBlock;
use app\blocks\MapVMF\MapVMFBlock;
use app\blocks\OurSercificate\OurSercificateBlock;
use app\blocks\Pricelist\PricelistBlock;
use app\blocks\PricelistROD\PricelistRODBlock;
use app\blocks\Promo\PromoBlock;
use app\blocks\PromoVMF\PromoVMFBlock;
use app\blocks\RaitingROD\RaitingRODBlock;
use app\blocks\UnderpriceROD\UnderpriceRODBlock;
use app\blocks\ServicesROD\ServicesRODBlock;

// Получаем данные для главных страниц разделов (и приравненых к таковым)
$currentPage = Yii::$app->controller->currentPage;

// Генерация метатегов
$this->title = $currentPage->getTitle();
$this->registerMetaTag(['name' => 'description', 'content' => 'Крупнейший автосервис в Евпатории. ✅ Ремонт и обслуживание авто. ✅ Свой магазин автозапчастей. ✅ Гарантия 6 месяцев. Ремонт автомобиля - узнать цены и ⏰ записаться в техцентр «СТО Родник» ☎️ 8(978)077-62-82.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $currentPage->getKeywords()]);

// Хлебные крошки
$this->params['breadcrumbs'][] = $currentPage->name;

?>

<!-- Первый блок начало -->
<?= PromoBlock::block(); ?>
<!-- Конец Первый блок -->

<?= BrandsliderBlock::block(); ?>

<!--Блов КМВ-->
<?= PromoVMFBlock::block(); ?>
<!--Блок ВМФ конец-->

<!-- Блок Цены начало -->
<?= ServicesRODBlock::block(); ?>
<!-- Конец Блок Цены -->

<!-- Блок Акции начало -->
<?= CampaignsRODBlock::block(); ?>
<!-- Конец Блока Акции -->

<!-- Начало БЛОКА ПРАЙС-ЛИСТ -->
<?= PricelistRODBlock::block(); ?>
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
<?= MapVMFBlock::block(); ?>
<!-- Конец Блока Акции -->
