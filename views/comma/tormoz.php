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
                <img src="/img/catalog/g01.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Brake & Clutch Fluid DOT 3</p>
                <p>Тормозная жидкость ДОТ3</p>
                <p>Стандартная тормозная жидкость для автомобилей, произведенных до начала 80-х годов</p>
            </td>
            <td class="oil-price">
                <p>0.5 л – <span class="proiz">1200 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/g02.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Brake & Clutch Fluid DOT 4</p>
                <p>Универсальная синтетическая тормозная жидкость ДОТ4</p>
                <p>Применима для всех гидравлических тормозных систем и систем сцепления, где требуется спецификация DOT3, DOT4, J1703.</p>
            </td>
            <td class="oil-price">
                <p>0.5 л – <span class="proiz">700 руб</span></p>
                <p>1 л – <span class="proiz">1200 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/g03.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Brake & Clutch Fluid DOT 4 ESP</p>
                <p>Универсальная синтетическая тормозная жидкость ДОТ4.</p>
                <p>Специально создана для современных автомобилей с электронной системой стабилизации (ESP), контролирующей тормозные системы с ABS и EBS.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1800 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/g04.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Brake & Clutch Fluid DOT5.1</p>
                <p>Синтетическая тормозная жидкость DOT5.1</p>
                <p>Жидкость самого высокого качества для тормозных систем и систем сцепления, специально разработанная для современных моделей автомобилей.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">2050 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/g05.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">MVCHF Central Hydraulic Fluid</p>
                <p>Специальная гидравлическая жидкость на основе синтетического масла для гидроусилителей руля, центральных гидравлических систем и регулируемых пневмогидравлических подвесок.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1800 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/g06.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">LHM+</p>
                <p>Высокоочищенная минеральная гидравлическая жидкость, которая содержит высокотехнологичные присадки, дающие исключительные низкотемпературные характеристики и защиту против износа, коррозии</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1400 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/g07.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Power Steering Fluid</p>
                <p>Жидкость и кондиционер гидроусилителя руля.</p>
                <p>Способствует предотвращению протечек (содержит герметик) жидкости и устраняет специфический « визг» гидроусилителя.</p>
            </td>
            <td class="oil-price">
                <p>5 л – <span class="proiz">1100 руб</span></p>
            </td>
        </tr>

    </table>
    <br>
</div>