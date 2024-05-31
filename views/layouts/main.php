<?php

/*
 * 23.11.2020
 * File: main.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

use app\assets\AppAsset;
use app\blocks\Modal\ModalForm;
use app\widgets\Alert;
use yii\helpers\Html;

AppAsset::register($this);
$serviceGroup = isset($this->params['serviceGroupId']) ? $this->params['serviceGroupId'] : null;

?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language; ?>">
    <head>
        <meta charset="<?= Yii::$app->charset; ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<!--        --><?php //$this->registerCsrfMetaTags(); ?>
<!--        --><?php //Yii::$app->seo->canonicalMeta($this->params); ?>
<!--        --><?php // Yii::$app->seo->ampMeta($this->params); ?>
        <title><?= Html::encode($this->title) ?></title>

        <link rel="preload" href="/css/style.min.css.gz" as="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />

        <?php $this->head(); ?>

        <!-- Open Graph Meta Start -->
<!--        --><?php //= Yii::$app->seo->renderOGMeta(); ?>
        <!-- Open Graph Meta End -->

        <!-- Shema Org Start -->
<!--        --><?php //= Yii::$app->seo->renderShemaMeta(); ?>
<!--        --><?php //= Yii::$app->seo->breadcrumbShema($this->params); ?>
        <!-- Shema Org End -->

        <!-- SCHEMA -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "LocalBusiness",
			"name": "СТО Родник",
			"image": "https://storodnik.ru/img/logo.png",
			"telephone": "+7(978)077-62-82",
			"email": "director@storodnik.ru",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "Евпатория",
				"streetAddress": "Межквартальный проезд 11А",
				"addressCountry": "Россия"
			},
			"sameAs": ["https://vk.com/"],
			"openingHours": "Пн-Вс 08:30-18:00",
			"paymentAccepted": "Оплата наличными, картой",
			"priceRange": "1000 нормочас",
			"url": "https://storodnik.ru/",
			"aggregateRating": {
				"@type": "AggregateRating",
				"ratingValue": "4,923",
				"bestRating": "5",
				"worstRating": "4",
				"ratingCount": "41"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "BreadcrumbList",
			"itemListElement": [{
					"@type": "ListItem",
					"position": 1,
					"item": {
						"@id": "https://storodnik.ru/",
						"name": "&#128293; СТО Родник"
					}
				}			]
		}
	</script>
	<!-- SCHEMA END -->

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter89214513 = new Ya.Metrika({
                            id:89214513,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/89214513" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter-->


        <!--LiveInternet counter-->
        <!--/LiveInternet-->

    </head>
    <body>

        <?php $this->beginBody(); ?>

        <!--Шапка МИГ начало-->
        <header class="header-page">
            <div class="header-page__top">
                <div class="container">
                    <div class="header-page__inner">
                        <div class="header-page__logo logo">
                            <a class="" href="/">
                            <img src="/img/rodnik/logo-rod.svg"/>
                            </a>
                        </div>
                        <div class="header-page__contacts">
                            <div class="contacts-item">
                                <div class="contacts-item__adress"><a href="https://yandex.ru/maps/-/CCURZNGv3D" target="_blank">Евпатория, Межквартальный проезд 11А</a></div>
                                <div class="contacts-item__phone">
                                    <?php if($serviceGroup['url'] == 'detejling' || $serviceGroup['parent_id'] == 306): ?>
                                        <a class="phone__data1 " style="text-align: center"  href="tel:+79785408282"><b>8 (978) 540-82-82 - Основной телефон</b></a>
                                    <?php elseif (in_array($serviceGroup['parent_id'], [4, 474, 500]) ||  in_array($serviceGroup['url'], ['pokraska-kuzova', 'kuzovnoj-remont', 'remont-avtostekol'])):?>
                                        <a class="phone__data1"  style="text-align: center"  href="tel:+79787321600"><b>8 (978) 732-16-00 - Основной телефон</b></a>
                                    <?php else: ?>
                                        <a class="phone__data1"  href="tel:+79783041952"><b>8 (978) 304-19-52 - Основной телефон </b></a>
                                    <?php endif; ?>
                                    <a class="phone__data1" style="text-align: center"  href="tel:+79780776282">8 (978) 077-62-82 - Дополнительный</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-phones">
<!--                            <button class="btn btn-warning btn-lg" type="button" data-toggle="modal" data-target="#lobnenskaya">Получить консультацию</button>-->
<!--                            <a class="whatsapp" style="display: none;" href="https://wa.me/79854289850" target="_blank"></a>-->
<!--                            <div class="col-xl-2 col-lg-3 col-md-3 col-7 header-phones">-->
                                <b><div class="header-center-schedule"><b>Время работы: с 08:30 до 18:00</div>
                                <div class="header-center-schedule">Сб c 9:00 до 14:00. Вс выходной</div></b>
                                <?php //<a href="tel:74994441437" class="header-phones-phone"><span>8 (499) 444-14-37</span></a> ?>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Заказать звонок" data-type="consultation" tabindex="0">Получить консультацию</a>
<!--                                <div class="addr-open"><span>Выбрать сервис</span></div>-->

<!--                                <div class="header-page__callback">-->
<!--                                    <div class="col-md-1 col-sm-2 col-2  mobmenu-open"><img src="/img/icon/menubtn.svg" alt="*"></div>-->
<!--                                    <div class="menu-ten"></div>-->
<!--                                </div>-->
                            </div>

                    </div>
                </div>
            </div>
            <div class="header-page__nav">
                <div class="container">
                    <nav class="navbar">
                        <div class="navbar__mobile">
                            <div class="navbar__mobile-right">
                                <a href="https://yandex.ru/navi?rtext=45.255378%2C33.379174~45.221974%2C33.353902&rtt=auto"
                                   target="_blank"
                                   style="font-size: 14px; font-weight: 800; color: black; text-decoration: none" >Межквартальный проезд 11А</a>
                                <div class="contacts-item__phone">
                                    <a class="phone__data " id="sev" href="tel:+79783041952">8 (978) 304-19-52</a>
                                    <a class="map-phone" href="tel:+79780776282">8 (978) 077-62-82</a>
                                </div>
                                <div><button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                            </div>

                        </div>

                        <div class="collapse navbar-collapse" id="bs-navbar" style="position:relative;">
                            <ul class="nav navbar-nav">
                                <li data-toggle="collapse"  data-target="#bs-navbar"><a href="/services/">Услуги</a></li>
                                <li data-toggle="collapse" data-target="#bs-navbar"><a href="/price/">Прайс лист</a></li>
                                <li data-toggle="collapse" class="vipbtn-ssil"><a href="#">О Нас</a></li>
                                <li><a href="/tehosmotr">Техосмотр</a></li>
                                <li data-toggle="collapse" data-target="#bs-navbar" ><a href="/#header_advantage">Акции</a></li>
                                <li data-toggle="collapse" data-target="#bs-navbar"><a href="/#header_raiting">Отзывы</a></li>
                                <li data-toggle="collapse" data-target="#bs-navbar"><a href="/contact/">Контакты</a></li>
                                <div class="dropdown">
                                    <li class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                        Каталог Comma
                                    </li>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="position: absolute !important;">
                                        <a class="dropdown-item" type="button" href="/comma/oils/">Масла Comma</a>
                                        <a class="dropdown-item" type="button" href="/comma/antifriz/">Антифризы экстра класса</a>
                                        <a class="dropdown-item" type="button" href="/comma/tormoz/">Тормозные и гидравлические жидкости</a>
                                        <a class="dropdown-item" type="button" href="/comma/transmissiya/">Трансмиссионные масла</a>
                                    </div>
                                </div>
                                <div class="header_card_submenu">
                                    <div class="header_card_submenu_item row">
                                        <div class="spis-block ">
                                            <a href="/about/commercial">Ремонт коммерческого транспорта</a>
                                            <a href="/about/yuridicheskie">Ремонт и обслуживание авто юридических лиц</a>
                                        </div>

                                    </div>
                                </div>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--Шапка МИГ конец-->
        <?= Alert::widget() ?>
        <?= $content ?>

        <?= ModalForm::block(['detailing' => isset($this->params['detailing'])]); ?>
        <footer>
            <div class="container">
                <div class="footer_body">
                    <div class="footer_web">
                        <a class="vk" href="https://vk.com/storodnik"></a>
                        <a class="insta" href="https://www.instagram.com/storodnik/"></a>
                    </div>
<!--                    <div class="footer_link">-->
<!--                        <div class="column">-->
<!--                            <a href="https://www.storodnik.ru/o-nas/">О нас</a>-->
<!--                            <a href="/tehosmotr">Техосмотр</a>-->
<!--                            <a href="https://www.storodnik.ru/usligu/">Регистрация переоборудования</a>-->
<!--                            <a href="https://www.storodnik.ru/akcii/">Акции</a>-->
<!--                        </div>-->
<!--                        <div class="column">-->
<!--                            <a href="https://www.storodnik.ru/masla-comma/">Масла Comma</a>-->
<!--                            <a href="https://www.storodnik.ru/antifrizy-ekstra-klass-na-osnove-basf/">Антифризы</a>-->
<!--                            <a href="https://www.storodnik.ru/tormoznye-i-gidravlicheskie-zhidkosti/">Тормозные жидкости</a>-->
<!--                            <a href="https://www.storodnik.ru/transmissionnye-masla/">Трансмиссионные масла</a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
                    <div class="footer_copy">
                        <p>© <?=date('Y'); ?> АВТОТЕХЦЕНТР РОДНИК | ЕВПАТОРИЯ</p>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript">var __cs=__cs||[];__cs.push(["setCsAccount","1ovq5_22PNk11r3mdTITRF8GN1i6ssNt"]);</script>
        <?php $this->endBody(); ?>
        <script>
            var lazyLoadInstance = new LazyLoad({
                elements_selector: ".lazy"
            });
        </script>
    </body>
</html>
<?php $this->endPage(); ?>