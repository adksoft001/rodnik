<?php

/* 
 * 2021 Jan 30
 * File: index.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

use app\blocks\CampaignsROD\CampaignsRODBlock;
use app\blocks\MapVMF\MapVMFBlock;
use app\blocks\OurSercificate\OurSercificateBlock;
use app\blocks\PricelistROD\PricelistRODBlock;
use app\blocks\Promo\PromoBlock;
use app\blocks\PromoVMF\PromoVMFBlock;
use app\blocks\RaitingROD\RaitingRODBlock;
use app\blocks\RepareCar\RepareCarBlock;
use app\blocks\UnderpriceROD\UnderpriceRODBlock;
use app\helpers\Subdomains;
use yii\widgets\Breadcrumbs;

// Генерация метатегов
$this->title = 'Ремонт ' . $brand->name . ' ' . $model->name . ' ' . $model->rus_name . ' цена в Евпатории | Автосервис ' . $brand->name . ' СТО Родник';
$this->registerMetaTag(['name' => 'description', 'content' => 'Ремонт и обслуживание ' . $brand->name . ' ' . $model->name . ' ' . $model->rus_name .  '. ✅ Крупнейший автосервис ' . $brand->name .' в Евпатории. ✅ Свой магазин автозапчастей. ✅ Гарантия 6 месяцев. ⏰ Записаться в техцентр ' . $brand->name . ' «СТО Родник» ☎️ 8(978)077-62-82.']);
//$this->registerMetaTag(['name' => 'keywords', 'content' => $core->getKeywords($brand->keywords, true)]);




if (Subdomains::getStatus() == false) {
    // Хлебные крошки
    $this->params['breadcrumbs'][] = ['label' => $brand->name, 'url' => '/' . $brand->url . '/'];
    $this->params['breadcrumbs'][] = $model->name;
    // Canonical
    $this->params['canonical'] = $brand->url . '/' . $model->url;
} else {
    // Хлебные крошки
    $this->params['breadcrumbs'][] = $model->name;
    // Canonical
    $this->params['canonical'] = $model->url;
}


?>

<!-- Первый блок начало -->
<?= PromoBlock::block([
    'brandName' => $brand->name . ' ' . $brand->rus_name,
    'modelName' => $model->name,
]); ?>
<!-- Конец Первый блок -->

<div class="breadcrumbs">
    <div class="container container2">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>


<!-- Блок РЕМОНТ АВТО начало -->
<?= RepareCarBlock::block([
    'brand' => $brand,
    'model' => $model,
    'subdomain' => Subdomains::getStatus()
]); ?>
<!-- Конец Блока РЕМОНТ АВТО -->

<!--Блов КМВ-->
<?= PromoVMFBlock::block([
        'model' => $model,
        'brand' => $brand,
]); ?>
<!--Блок ВМФ конец-->

<!-- Блок Акции начало -->
<?= CampaignsRODBlock::block(); ?>
<!-- Конец Блока Акции -->

<!-- Начало БЛОКА ПРАЙС-ЛИСТ-->
<?= PricelistRODBlock::block([
    'model' => $model,
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
<?= MapVMFBlock::block(); ?>
<!-- Конец Блока Акции -->