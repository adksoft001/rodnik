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

use app\blocks\Promo\PromoBlock;
use app\blocks\PromoVMF\PromoVMFBlock;
use app\blocks\Brandslider\BrandsliderBlock;
use app\blocks\Services\ServicesBlock;
use app\blocks\ServicesROD\ServicesRODBlock;
use app\blocks\Campaigns\CampaignsBlock;
use app\blocks\CampaignsROD\CampaignsRODBlock;
use app\blocks\MapVMF\MapVMFBlock;
use app\blocks\Ourworks\OurworksBlock;
use app\blocks\PricelistROD\PricelistRODBlock;
use app\blocks\Underprice\UnderpriceBlock;
use app\blocks\Advantages\AdvantagesBlock;
use app\blocks\CommaOils\CommaOilsBlock;
use app\helpers\Specsymbols;

// Получаем данные для главных страниц разделов (и приравненых к таковым)
$currentPage = Yii::$app->controller->currentPage;

// Генерация метатегов
$this->title = $currentPage->getTitle();
$this->registerMetaTag(['name' => 'description', 'content' => Specsymbols::replace($currentPage->getDescription())]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $currentPage->getKeywords()]);

// Хлебные крошки
$this->params['breadcrumbs'][] = $currentPage->name;

?>

<div class="container comma">
    <h2>Тормозные и гидравлические жидкости</h2>
    <br>
    <h3>Тормозные жидкости, гидравлические жидкости</h3>
    <br>
    <table>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t01.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">MVMTF Plus 75W</p>
                <p><span class="proiz">Допуски производителей:</span> BMW MTF LT-3; Ford WSS-M2C200-D2; VW G 052 178; VW G 060 726; VW G 052 171; VW G 052 726; VW G 052 512</p>
                <p><span class="proiz">Сервисная классификация:</span> API GL4</p>
                <p>Полностью синтетическое масло для механических трансмиссий.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">2200 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t02.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">AQDCT Dual Clutch Transmission Fluid</p>
                <p><span class="proiz">Допуски производителей:</span>VW TL 521 82; BMW DCTF-1</p>
                <p>Полностью синтетическая трасмиссионная жидкость для систем трасмиссии с двойным сцеплением.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1450 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t03.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">AQCVT® Continuously Variable Transmission Fluid</p>
                <p><span class="proiz">Сервисная классификация:</span> CVTF</p>
                <p>Полностью синтетическая трансмиссионная жидкость для бесступенчатых коробок передач (вариаторов – Continuously Variable Transmission).</p>
            </td>
            <td class="oil-price">
                <p>Не продается</p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t04.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Automatic Transmission Fluid AQ3™</p>
                <p><span class="proiz">Сервисная классификация:</span> GM Dexron® III & II/IID/IIE Ford M2C 138CJ/M2C 166H, ZF TE ML 09/14, Allison C4</p>
                <p>Применяется в автоматических трансмиссиях, требующих спецификации DEXRON® III, а также в системах гидроусилителя рулевого управления</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1500 руб</span></p>
                <p>5 л – <span class="proiz">7100 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t05.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Automatic Transmission Fluid AQM®</p>
                <p><span class="proiz">Сервисная классификация:</span> General Motors Dexron® II & IID</p>
                <p>Применяется в автоматических трансмиссиях, требующих спецификации DEXRON® II, а также в системах гидроусилителя рулевого управления и гидротрансформаторах</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1200 руб</span></p>
                <p>5 л – <span class="proiz">5200 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t06.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Automatic Transmission Fluid ASW</p>
                <p><span class="proiz">Допуски производителей:</span>Ford WSS-M2C924-A, VAG G-055-025-A2 & Toyota JWS 3309/Type T-IV</p>
                <p>Применяется в автоматических трансмиссиях более 105 моделей автомобилей от Volvo S70 (1988 г) до последних моделей Toyota Corolla.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">2450 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t07.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Automatic Transmission Fluid AQF®</p>
                <p><span class="proiz">Допуски производителей:</span>FORD ESP-M2C 33F/G</p>
                <p>Жидкость для автоматической трансмиссии FORD</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1250 руб</span></p>
                <p>5 л – <span class="proiz">5600 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t08.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">LS80W-90 LIMITED SLIP GEAR OIL</p>
                <p><span class="proiz">Сервисная классификация:</span> API GL5</p>
                <p>Трансмиссионное масло LIMITED SLIP спецификации GL5, специально созданное для тихой работы самоблокирующихся дифференциалов.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1250 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t09.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">GEAR OIL EP75w80</p>
                <p>Трансмиссионное масло для современных автомобилей <span class="proiz">Peugeot, Citroen, Renault и Rover</span>, требующих вязкости 75w80.</p>

            </td>
            <td class="oil-price">
                <p>Не продается</p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t10.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">SX75w90 GL4</p>
                <p><span class="proiz">Сервисная классификация:</span> API GL4</p>
                <p>Трансмиссионное масло на полусинтетической основе для современных пятиступенчатых и шестиступенчатых коробок передач.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1500 руб</span></p>
                <p>5 л – <span class="proiz">7200 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t11.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">SX75w90 GL5</p>
                <p><span class="proiz">Сервисная классификация:</span> API GL5</p>
                <p>Трансмиссионное масло на полусинтетической основе для современных пяти- и шестиступенчатых коробок передач.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1500 руб</span></p>
                <p>5 л – <span class="proiz">8100 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t12.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">EP 85w140 Gear Oil</p>
                <p><span class="proiz">Сервисная классификация:</span> API GL5</p>
                <p>Применяется для коробок передач, приводов задних мостов, других агрегатов, где требуется спецификация GL5</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1300 руб</span></p>
                <p>5 л – <span class="proiz">6000 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t13.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">EP80w90 GL-5 GEAR OIL</p>
                <p><span class="proiz">Сервисная классификация:</span> API GL5</p>
                <p>Применяется для коробок передач, приводов задних мостов, других агрегатов, где требуется спецификация GL5 и вязкость 80w90.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1150 руб</span></p>
                <p>5 л – <span class="proiz">5350 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t14.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">EP 80w90 Gear Oil</p>
                <p><span class="proiz">Сервисная классификация:</span> API GL4</p>
                <p>Применяется для механических коробок передач, приводов задних мостов, других агрегатов, где требуется спецификация GL4</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1300 руб</span></p>
                <p>5 л – <span class="proiz">5900 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/t15.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Multi-vehicle ATF & PSF</p>
                <p><span class="proiz">Допуски производителей:</span> Ford Mercon V, MOPAR ATF +3 and +4, VW G 052 162, MB 236.6/7/10/12, Dexron® II и III</p>
                <p>Полностью синтетическая гидравлическая жидкость, находящая более чем 1000 применений в АКПП, гидроусилителях руля, МКПП и других механизмах для огромного количества европейских, азиатских и американских автомобилей</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1900 руб</span></p>
            </td>
        </tr>
    </table>
    <br>
</div>