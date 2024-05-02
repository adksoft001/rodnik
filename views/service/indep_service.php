<?php

/*
 * 03.12.2020
 * File: indep_service.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

use app\blocks\CampaignsROD\CampaignsRODBlock;
use app\blocks\MapVMF\MapVMFBlock;
use app\blocks\Ourworks\OurworksBlock;
use app\blocks\Pricelist\PricelistBlock;
use app\blocks\Promo\PromoBlock;
use app\blocks\PromoVMF\PromoVMFBlock;
use app\blocks\RaitingROD\RaitingRODBlock;
use app\blocks\UnderpriceROD\UnderpriceRODBlock;
use app\helpers\Specsymbols;
use yii\widgets\Breadcrumbs;

// Генерация метатегов

$this->title = $core->getTitle($service->title, true);
$this->registerMetaTag(['name' => 'description', 'content' => $core->getDescription(Specsymbols::replace($service->description), true)]);
//$this->registerMetaTag(['name' => 'keywords', 'content' => $core->getKeywords($service->keywords, true)]);

$this->params['serviceGroupId'] = $service;

// Хлебные крошки
$this->params['breadcrumbs'][] = ['label' => $core['name'], 'url' => '/' . $core['url'] . '/'];
$this->params['breadcrumbs'][] = $service->name;
// Canonical
$this->params['canonical'] = $service->url;
// Инициализировать параметр "детейлинг"
if ($service->type == 'detailing') {
    $this->params['detailing'] = true;
}
$serviceID = $service->parent_id ?: $service->id;
?>
<!-- Первый блок начало -->
<?= PromoBlock::block([
    'h1' => $service->header,
    'groupId' => $service->price_group_id,
]); ?>
<!-- Конец Первый блок -->

<div class="breadcrumbs">
    <div class="container container2">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>



<!--Блов КМВ-->
<?= PromoVMFBlock::block([
        'serviceId' => $serviceID
]); ?>
<!--Блок ВМФ конец-->

<!-- Блок Наши работы начало -->
<?= OurworksBlock::block(); ?>
<!-- Конец Блока Наши работы -->

<?php if(!in_array($service->price_group_id, [323, 491, 4, 517])) :?>
    <!-- Блок Акции начало -->
    <?= CampaignsRODBlock::block(); ?>
    <!-- Конец Блока Акции -->
<?php endif;?>



<!-- Начало БЛОКА ПРАЙС-ЛИСТ -->
<?= PricelistBlock::block([
    'service' => $service
]); ?>
<!--Конец БЛОКА ПРАЙС-ЛИСТ-->

<!-- Начало подпрайсовый блок -->
<?= UnderpriceRODBlock::block([
    'serviceId' => $serviceID,
]); ?>
<!-- Конец подпрайсовый блок -->

<!-- Начало рейтинга блок -->
<?= RaitingRODBlock::block(); ?>
<!-- Конец рейтинга блок -->

<!-- Блок Акции начало -->
<?= MapVMFBlock::block([
    'serviceId' => $serviceID,
]); ?>
<!-- Конец Блока Акции -->