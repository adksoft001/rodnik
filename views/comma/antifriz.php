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
    <h2>Антифризы экстра класса</h2>
    <br>
    <h3>Антифриз созданный по технологии органических кислот (ОАТ) на основе BASF Glysantin (G40)!!!</h3>
    <p>Охлаждающие жидкости для двигателей, выпускаемые концерном BASF под брендом Glysantin®, занимают первое место в Европе по объемам продаж. Эта качественная продукция круглогодично, даже в условиях экстремального климата, надежно защищает двигатели автомобилей от коррозии, замерзания и перегрева. Концерн BASF впервые получил патент на жидкости Glysantin® в 1929 году, и с тех пор они пользуются очень большой популярностью среди автомобилистов. Оригинальная продукция Glysantin®, выпускаемая в Людвигсхафене, получила одобрение большинства производителей оборудования, работающих с крупнейшими автомобилестроительными компаниями.</p>
    <p>Сотрудничество BASF с ведущими поставщиками позволяет обеспечивать постоянное соответствие продуктов Glysantin® самым новейшим требованиям. Эти высокоэффективные охлаждающие жидкости для двигателей могут использоваться на всех типах автомобилей.</p>
    <p>Традиционные антифризы. ТОСОЛ и модификации.(Glysantin G05) Ингибиторы коррозии в таких видах антифриза изготовлены на базе неорганических веществ, среди которых нитриты, фосфаты, амины, силикаты и их варианты. Обозначаются IAT (Inorganic Acid Technology) или «Traditional coolants». Традиционные антифризы, к которым в том числе относится тосол, считаются сегодня морально устаревшими.</p>
    <p>Причина того, что постепенно они выходят из употребления, – низкий срок эксплуатации (2 года) и неэффективная работа при высоких температурах (свыше 105 °C). Покрывая силикатным слоем внутреннюю поверхность системы охлаждения, традиционные антифризы снижают ее защитные функции.</p>
    <p>Гибридные антифризы. G11.(Glysantin G48) В составе таких охлаждающих жидкостей, помимо органических ингибиторов, присутствуют и неорганические (силикаты, нитриты, фосфаты). Обозначаются HOAT (Hybrid Organic Acid Technology). Срок эксплуатации гибридных антифризов редко превышает 3 года.</p>
    <p>Карбоксилатные антифризы. G12/G12+ (Glysantin G30,33,34) На сегодняшний день считаются лучшими, поскольку содержат в своем составе ингибиторы коррозии, изготовленные на базе органических (иначе — карбоновых) кислот. Обозначаются OAT (Organic Acid Technology). Карбоксилатные ингибиторы не образуют защитного слоя на всей поверхности системы охлаждения, адсорбируясь лишь в местах возникновения коррозии с образованием защитных слоёв толщиной не более 0,1 микрона только в местах зарождения очагов коррозии. Карбоксилатные антифризы служат дольше, чем гибридные и традиционные, – в среднем около 5 лет.</p>
    <p>Лобридные. G12++ (Glysantin G40)Этот вид антифризов выделен сравнительно недавно — в 2008 году. Их уникальность в том, что к органической основе добавлено небольшое количество минеральных ингибиторов. Поскольку общепринятого обозначения для них еще нет, в среде разработчиков лобриды именуются «Lobrid coolants» или «SOAT coolants». Лобридные антифризы содержат в своём составе органические кислоты и силикаты. Силикаты расходуются на образование защитной антикоррозионной плёнки, а карбоновые составляющие защищают только те места, где может начаться коррозия. Отличается неограниченным сроком службы при заливке в новый двигатель.</p>
    <br>
    <h3>Антифризы Экстра</h3>
    <br>
    <table>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/a01.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Xstream G40 Antifreeze & Coolant Concentrate</p>
                <p>Антифриз-концентрат сиреневого цвета (BASF Glysantin G40).</p>
                <p>VW code – G12++</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1000 руб</span></p>
                <p>2 л – <span class="proiz">1900 руб</span></p>
                <p>5 л – <span class="proiz">2400 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/a02.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Xstream G40 Antifreeze & Coolant Ready Mixed</p>
                <p>Антифриз сиреневый готовый к употреблению (BASF Glysantin G40).</p>
                <p>VW code – G12++ .</p>
            </td>
            <td class="oil-price">
                <p>5 л – <span class="proiz">4600 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/a03.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Xstream G48 Antifreeze & Coolant Concentrate</p>
                <p>Антифриз-концентрат сине-зеленого цвета (BASF Glysantin G48).</p>
                <p>VW code – G 11</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1400 руб</span></p>
                <p>2 л – <span class="proiz">2700 руб</span></p>
                <p>5 л – <span class="proiz">6600 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/a04.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Xstream G48 Antifreeze & Coolant Ready Mixed</p>
                <p>Антифриз готовый сине-зеленого цвета (BASF Glysantin G48).</p>
                <p>VW code – G 11.</p>
            </td>
            <td class="oil-price">
                <p>5 л – <span class="proiz">4800 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/a05.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Xstream G30 Antifreeze & Coolant Concentrate</p>
                <p>Антифриз-концентрат красного цвета (BASF Glysantin G30).</p>
                <p>VW code – G12+</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1400 руб</span></p>
                <p>2 л – <span class="proiz">2650 руб</span></p>
                <p>5 л – <span class="proiz">6400 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/a06.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Xstream G30 Antifreeze & Coolant Ready Mixed</p>
                <p>Антифриз красный готовый к употреблению (BASF Glysantin G30).</p>
                <p>VW code – G12+</p>
            </td>
            <td class="oil-price">
                <p>1 л – <span class="proiz">1400 руб</span></p>
                <p>5 л – <span class="proiz">6350 руб</span></p>
            </td>
        </tr>
        <tr>
            <td class="oil-img">
                <img src="/img/catalog/a07.jpg" alt="МАСЛО" width="150" height="150" border="0">
            </td>
            <td class="oil-desc">
                <p class="title">Xstream G05 Antifreeze & Coolant Concentrate</p>
                <p>Концентрат антифриза желтый (BASF Glysantin G05).</p>
                <p>При использовании руководствуйтесь каталогом применимости на нашем сайте.</p>
            </td>
            <td class="oil-price">
                <p>5 л – <span class="proiz">4950 руб</span></p>
            </td>
        </tr>
    </table>
    <br>
</div>