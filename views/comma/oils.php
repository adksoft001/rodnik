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
    <h2> Масла Comma</h2>
    <br>
    <p>Более 8-ми лет мы являемся официальным и сертифицированным представителем Масел Comma в Крыму!</p>
    <p>Поставляем исчерпывающий спектр продукции, от моторных масел с низким уровнем сульфатной зольности и низким содержанием фосфора и серы для дизельных автомобилей с сажевыми фильтрами до антифризов и охлаждающих жидкостей, одобренных производителями.</p>
    <p>Приобретая масла и сервисные жидкости Сомма в нашем фирменном магазине – <strong>мы Гарантируем 100% качества</strong> и подлинности данной продукции!</p>

    <p class="akcia-comma"><span class="akc-comma"> Акция: </span> При покупке в нашем фирменном магазине моторного масла Сомма замена производится бесплатно!</p>
    <br>
    <h3>Элитная линия</h3>
    <br>
    <table>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m01.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">ECO-LLP 0W-20</p>
                <p><span class="proiz">Допуски производителей:</span> VW 508 00, VW 509 00</p>
                <p>Полностью синтетическое высококачественное масло 0W-20 для самых современных двигателей концерна VAG.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">2200  руб</span></p>
                <p>5 л – <span class="proiz">10500 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m02.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">ECO-VG 0W-30</p>
                <p><span class="proiz">Допуски производителей:</span> VW 504 00, VW 507 00; Porsche C30</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA C3</p>
                <p>Полностью синтетическое высококачественное масло 0W-30 для двигателей автомобилей концерна VAG.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1600 руб</span></p>
                <p>5 л – <span class="proiz">7850 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m03.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">ECO-FE 0W-30</p>
                <p><span class="proiz">Допуски производителей:</span> Ford WSS-M2C950-A</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA C2</p>
                <p>Полностью синтетическое высокоэффективное масло для современных автомобилей <span class="proiz">Ford</span> с бензиновыми и дизельными двигателями.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1300 руб</span></p>
                <p>5 л – <span class="proiz">6100 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m04.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">ECO-V 0W-20</p>
                <p><span class="proiz">Допуски производителей:</span> VCC RBS0-2AE</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA C5, API SN</p>
                <p>Полностью синтетическое высокоэффективное масло для современных автомобилей Volvo с бензиновыми и дизельными двигателями.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1350 руб</span></p>
                <p>5 л – <span class="proiz">6100 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m05.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">ECO-P 0W-30</p>
                <p><span class="proiz">Допуски производителей:</span> PSA B71 2312</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA C2</p>
                <p> Полностью синтетическое высокоэффективное масло для современных автомобилей <span class="proiz">PSA</span> с бензиновыми и дизельными двигателями. </p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1850 руб</span></p>
                <p>5 л – <span class="proiz">9400 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m06.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">ECO-F 5W-20</p>
                <p><span class="proiz">Допуски производителей:</span> FORD WSS M2C948-B, WSS M2C948-A, WSS-M2C925-A, WSS-M2C925-B; ILSAC GF-5, Jaguar Land Rover STJLR.03.5004</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA С5; API SN, SN-RC</p>
                <p>Полностью синтетическое высококачественное масло 5W-20 для двигателей <span class="proiz">EcoBoost (FORD)</span> последнего поколения.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1500 руб</span></p>
                <p>5 л – <span class="proiz">7200 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m07.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Pro-NRG 0W-20</p>
                <p><span class="proiz">Допуски производителей:</span> dexos 1:2015, Chrysler MS 6395; GM6094M & GM4718M</p>
                <p><span class="proiz">Сервисная классификация:</span> API SN; ILSAC GF-4, GF-5</p>
                <p>Полностью синтетическое высокоэффективное масло 0W-20 для современных автомобилей с бензиновыми двигателями, а также для большинства автомобилей с гибридными бензиново-электрическими двигателями.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1200 руб</span></p>
                <p>4 л – <span class="proiz">4600 руб</span></p>
                <p>5 л – <span class="proiz">5800 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m08.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Voltech 0W-30</p>
                <p><span class="proiz">Допуски производителей:</span> 95200377 – официально одобрено VOLVO</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA A5/B5; API SL</p>
                <p>Полностью синтетическое высокоэффективное масло 0W-30 для современных автомобилей Volvo с бензиновыми и дизельными двигателями.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1400 руб</span></p>
                <p>5 л – <span class="proiz">6800 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m09.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Pro-VLL 0W-30</p>
                <p><span class="proiz">Допуски производителей:</span> VW 503 00, VW 506 00, VW 506 01</p>

                <p>Полностью синтетическое высокоэффективное масло для современных автомобилей <span class="proiz">VAG</span> с бензиновыми и дизельными двигателями. </p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1550 руб</span></p>
                <p>5 л – <span class="proiz">7650 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m10.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">PROLIFE 5w30</p>
                <p><span class="proiz">Допуски производителей:</span> VW 504.00/507.00, MB 229.51, BMW LL-04, PORSCHE C30</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA C3</p>
                <p>Полностью синтетическое моторное масло экстра-класса для самых современных бензиновых и дизельных двигателей концерна <span class="proiz">VW-Audi Group (Audi, VW, Seat и Skoda)</span>.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1400 руб</span></p>
                <p>4 л – <span class="proiz">5400 руб</span></p>
                <p>5 л – <span class="proiz">6800 руб</span></p>
            </td>
        </tr>

        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m11.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">ECOLIFE 5W-30</p>
                <p><span class="proiz">Допуски производителей:</span> JAGUAR LANDROVER STJR.03.5005, FORD WSS-M2C934-B</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA C1</p>
                <p>Полностью синтетическое моторное масло, созданное для самых современных бензиновых и дизельных двигателей, оборудованных системой постобработки выхлопа, требующих спецификации ACEA C1. Для последних новинок автомобилей <span class="proiz">Mazda, Land Rover, Jaguar & Mitsubishi</span>, оборудованных дизельными сажевыми фильтрами (DPF). Предназначено для двигателей, работающих с длительным сроком сервисного обслуживания.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1400 руб</span></p>
                <p>5 л – <span class="proiz">6800 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m12.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Syner-Z 5w30</p>
                <p><span class="proiz">Допуски производителей:</span> VW 502.00/505.00/505.01, MB 229.31, MB 229.51, MB 229.52, BMW LL 2004, dexos 2</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA C3, API SN/CF</p>
                <p>Полностью синтетическое моторное масло экстра-класса для самых современных бензиновых и дизельных двигателей, оснащенных системами постобработки выхлопных газов..</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1300 руб</span></p>
                <p>4 л – <span class="proiz">5200 руб</span></p>
                <p>5 л – <span class="proiz">6400 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m13.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">PRO-TECH 5w-30</p>
                <p><span class="proiz">Допуски производителей:</span> PSA B71 2290</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA C2</p>
                <p>Полностью синтетическое моторное масло c высокими эксплуатационными характеристиками. Для последних новинок автомобилей <span class="proiz">Peugeot и Citroen</span>, оборудованных системой доочистки выхлопа.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1500 руб</span></p>
                <p>5 л – <span class="proiz">7400 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m14.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">ECOREN 5W-30</p>
                <p><span class="proiz">Допуски производителей:</span> MB 226.51, RN0720</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA C4</p>
                <p>Полностью синтетическое высокопроизводительное моторное масло c пониженным содержанием зольности, фосфора и серы. Создано специально для новейших бензиновых и дизельных двигателей, оснащённых системами очистки выхлопов, требующих применения масел АСЕА С4. Моторное масло, специально разработанное для последнего поколения дизельных двигателей группы <span class="proiz">Renault</span>, оснащенных сажевым фильтром. </p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1500 руб</span></p>
                <p>5 л – <span class="proiz">7400 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m15.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">LONG LIFE 5w30</p>
                <p><span class="proiz">Допуски производителей:</span> OPEL B 040 2095 (GMLL-A-025), OPEL B 040 2098 (GMLL-B-025), MB 229.5, VW 502 00/VW 505 00</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA A3/B4 API SL/CF</p>
                <p>Полностью синтетическое моторное масло экстра-класса для самых современных бензиновых и дизельных двигателей. Создано специально для современных двигателей концерна <span class="proiz">General Motors</span>.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1350 руб</span></p>
                <p>4 л – <span class="proiz">5400 руб</span></p>
                <p>5 л – <span class="proiz">6400 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m16.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">XTECH 5W-30</p>
                <p><span class="proiz">Допуски производителей:</span> Ford WSS-M2C913-D, WSS-M2C913-C, WSS-M2C913-B, WSS-M2C913-A; Jaguar Land Rover STJLR 03.5003</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA A5/B5 API SL/CF</p>
                <p>Полностью синтетическое моторное масло. Создано специально для самых современных двигателей <span class="proiz">FORD</span>. Идеально подходит для большинства <span class="proiz">ЯПОНСКИХ</span> автомобилей</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1100 руб</span></p>
                <p>2 л – <span class="proiz">2100 руб</span></p>
                <p>4 л – <span class="proiz">4100 руб</span></p>
                <p>5 л – <span class="proiz">5000 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m17.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">PD Plus 5w40</p>
                <p><span class="proiz">Допуски производителей:</span> FORD WSS M2C917-A; VW 502 00, VW 505 00, VW 505 01; MB 229.31, MB 226.5; RN 0700; RN 0710; dexos 2; Porsche A40</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA C3 API SN</p>
                <p>Полностью синтетическое дизельное моторное масло (VW 505.1). Специально создано для дизельных двигателей <span class="proiz">VW-Audi Group</span>, использующих систему “Pumpe Duse” (PD ) – “насос-форсунка” с прямым впрыском. Предназначено для самых современных дизельных двигателей легковых и грузовых автомобилей с каталитическими конвертерами и турбонаддувом.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1100 руб</span></p>
                <p>4 л – <span class="proiz">4300 руб</span></p>
                <p>5 л – <span class="proiz">5100 руб</span></p>
            </td>
        </tr>


        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m18.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Syner-G 5w40</p>
                <p><span class="proiz">Допуски производителей:</span> MB 229.1, MB 229.3,VW502.00/505.00, RN0700/0710, Porsche A40, PSA B71 2296</p>
                <p><span class="proiz">Сервисная классификация:</span> API SN/CF ACEA A3/B4</p>
                <p>Полностью синтетическое универсальное моторное масло. Предназначено для самых современных бензиновых и дизельных двигателей с каталитическими конвертерами и турбонаддувом</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1000 руб</span></p>
                <p>4 л – <span class="proiz">4200 руб</span></p>
                <p>5 л – <span class="proiz">5300 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m19.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Motorsport Oil 5w50</p>
                <p><span class="proiz">Допуски производителей:</span> Caterham approved</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA A3/B3 API SL/CF</p>
                <p>Моторное масло, специально созданное для автоспорта. Для использования в автоспорте вместо сервисных классификаций: АСЕА А3/В3, API SL CF, SAE 5w40, 10w40 и 15w40</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1400 руб</span></p>
                <p>5 л – <span class="proiz">6400 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m20.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Eurolite 10w40</p>
                <p><span class="proiz">Допуски производителей:</span> RN0700, RN0710; PSA B71 2300; MB 229.3; VW 501 01 / 505 00</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA A3/B4 API SN/CF</p>
                <p>Полусинтетическое универсальное моторное масло. Предназначено для современных бензиновых и дизельных двигателей с каталитическими конвертерами и турбонаддувом.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">850 руб</span></p>
                <p>4 л – <span class="proiz">3200 руб</span></p>
                <p>5 л – <span class="proiz">4000 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m21.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">XT2000 15w40</p>
                <p><span class="proiz">Допуски производителей:</span> MB 229.1, MB 228.3; VW 501 01, VW 505 00</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA A3/B4; API SL CF CG-4</p>
                <p>Полусинтетическое универсальное моторное масло. Предназначено для современных бензиновых и дизельных двигателей с каталитическими конвертерами и турбонаддувом.</p>
            </td>
            <td class="oil-price">
                <p>Не продается</p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m22.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Eco-M 0W-20</p>
                <p><span class="proiz">Допуски производителей:</span> MB 229.71, Jaguar Land Rover STJLR.51.5122</p>
                <p><span class="proiz">Сервисная классификация:</span> ACEA C5</p>
                <p>Полностью синтетическое высококачественное моторное масло 0W-20.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">Нет в наличии</span></p>
                <p>5 л – <span class="proiz">Нет в наличии</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/m23.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Syner-X 5W-30</p>
                <p><span class="proiz">Допуски производителей:</span> Dexos 1:2015, GM 6094M и 4718M, Chrysler MS 6395, Ford WSS-M2C946-A</p>
                <p><span class="proiz">Сервисная классификация:</span> API SN ILSAC GF-5</p>
                <p>Полностью синтетическое, высокоэффективное масло 5W-30 для современных бензиновых двигателей.</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1350 руб</span></p>
                <p>5 л – <span class="proiz">5600 руб</span></p>
            </td>
        </tr>
    </table>
    <br>
</div>