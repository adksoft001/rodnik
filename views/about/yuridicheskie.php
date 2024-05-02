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

use app\blocks\CampaignsROD\CampaignsRODBlock;
use app\blocks\Brandslider\BrandsliderBlock;
use app\blocks\ContactsInPage\ContactsInPageBlock;
use app\blocks\MapVMF\MapVMFBlock;
use app\blocks\OurSercificate\OurSercificateBlock;
use app\blocks\PricelistROD\PricelistRODBlock;
use app\blocks\Promo\PromoBlock;
use app\blocks\PromoVMF\PromoVMFBlock;
use app\blocks\RaitingROD\RaitingRODBlock;
use app\blocks\ServicesROD\ServicesRODBlock;
use app\blocks\UnderpriceROD\UnderpriceRODBlock;
use app\blocks\Advantages\AdvantagesBlock;


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

<!-- Первый блок начало -->
<?= PromoBlock::block([
    'h1' => Yii::$app->controller->currentPage->header,
]); ?>
<!-- Конец Первый блок -->

<?= AdvantagesBlock::block();?>

<!--Блов КМВ-->
<?= PromoVMFBlock::block(); ?>
<!--Блок ВМФ конец-->

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

<!-- Первый блок начало-->
<?= ContactsInPageBlock::block(); ?>
<!-- Конец Первый блок-->
