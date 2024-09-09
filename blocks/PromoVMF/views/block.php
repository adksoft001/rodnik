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

/** $detailing boolean */

?>

<?php if (in_array($serviceId, [474, 4, 500])) : ?>
    <div class="accordion_anchor" id="header_about_us">
        <div class="container-vmf">
            <div class="about_company">
                <h2>О компании</h2>
                <div class="about_company__block">
                    <div class="about_company__block__left">
                        <div class="about_company_slider">
                            <div class="slider__wrapper">
                                <div class="slider__items">
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/kuzov/1.jpg" alt="img" height="466">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/kuzov/2.jpg" alt="img" height="466">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/kuzov/3.jpg" alt="img" height="466">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/kuzov/4.jpg" alt="img" height="466">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/kuzov/5.jpg" alt="img" height="466">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/kuzov/6.jpg" alt="img">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/kuzov/7.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="about_company_slider__nav">
                                <button class="about_company_slider__arrow__left">
                                    <svg width="40" height="22" viewBox="0 0 40 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.9705 0.0297852L12.7522 1.81159L4.82355 9.74031H40V12.2602H4.82355L12.7522 20.1888L10.9705 21.9706L0 11.0002L10.9705 0.0297852Z"
                                              fill="white"/>
                                    </svg>
                                </button>
                                <div class="about_company_slider__nav__content">
                                    <div class="about_company_slider__nav__number_slider">
                                        <p id="count_slider_about_company"> 1 / 5</p>
                                    </div>
                                </div>
                                <button class="about_company_slider__arrow__right">
                                    <svg width="40" height="22" viewBox="0 0 40 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.0295 0.0297852L27.2478 1.81159L35.1764 9.74031H0V12.2602H35.1764L27.2478 20.1888L29.0295 21.9706L40 11.0002L29.0295 0.0297852Z"
                                              fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="about_company__block__right">
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/1.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>ВСЕ В ОДНОМ МЕСТЕ</p>
                                <small>Крупнейший автосервис в Евпатории - Детейлинг, слесарный и кузовной ремонт,
                                    техосмотр.</small>
                            </div>
                        </div>
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/2.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>ПОЛНЫЙ СПЕКТР УСЛУГ</p>
                                <small>Кузовной ремонт, покраска кузова, ремонт автостёкол, детейлинг</small>
                            </div>
                        </div>
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/3.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>КАЧЕСТВЕННЫЕ МАТЕРИАЛЫ</p>
                                <small>В работе используем только премиум расходные материалы</small>
                            </div>
                        </div>
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/4.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>ГАРАНТИЯ КАЧЕСТВА</p>
                                <small>Предоставляем гарантию на кузовной ремонт и покраску кузова - 6 месяцев</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php elseif ($serviceId == 306) : ?>
    <div class="accordion_anchor" id="header_about_us">
        <div class="container-vmf">
            <div class="about_company">
                <h2>О компании</h2>
                <div class="about_company__block">
                    <div class="about_company__block__left">
                        <div class="about_company_slider">
                            <div class="slider__wrapper">
                                <div class="slider__items">
                                    <!--                            {% for i in 1..10 %}-->
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/detejling/1.png" alt="img" height="466">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/detejling/3.png" alt="img" height="466">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/detejling/5.jpg" alt="img" height="466">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/detejling/6.jpg" alt="img" height="466">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/detejling/7.jpg" alt="img" height="466">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/detejling/8.jpeg" alt="img">
                                    </div>
                                    <!--                            {% endfor %}-->
                                </div>
                            </div>
                            <div class="about_company_slider__nav">
                                <button class="about_company_slider__arrow__left">
                                    <svg width="40" height="22" viewBox="0 0 40 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.9705 0.0297852L12.7522 1.81159L4.82355 9.74031H40V12.2602H4.82355L12.7522 20.1888L10.9705 21.9706L0 11.0002L10.9705 0.0297852Z"
                                              fill="white"/>
                                    </svg>
                                </button>
                                <div class="about_company_slider__nav__content">
                                    <div class="about_company_slider__nav__number_slider">
                                        <p id="count_slider_about_company"> 1 / 5</p>
                                    </div>
                                </div>
                                <button class="about_company_slider__arrow__right">
                                    <svg width="40" height="22" viewBox="0 0 40 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.0295 0.0297852L27.2478 1.81159L35.1764 9.74031H0V12.2602H35.1764L27.2478 20.1888L29.0295 21.9706L40 11.0002L29.0295 0.0297852Z"
                                              fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="about_company__block__right">
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/1.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>ВСЕ В ОДНОМ МЕСТЕ</p>
                                <small>Крупнейший автосервис в Евпатории - Детейлинг, слесарный и кузовной ремонт,
                                    техосмотр.</small>
                            </div>
                        </div>
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/2.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>ПОЛНЫЙ СПЕКТР УСЛУГ</p>
                                <small>Полировка кузова, химчистка, покрытие керамикой, защитная пленка, реставрация
                                    кожи салона</small>
                            </div>
                        </div>
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/3.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>КАЧЕСТВЕННЫЕ МАТЕРИАЛЫ</p>
                                <small>В работе используем только премиум расходные материалы по детейлингу</small>
                            </div>
                        </div>
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/4.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>ГАРАНТИЯ КАЧЕСТВА</p>
                                <small>Профессиональный уход за кузовом и салоном авто</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="accordion_anchor" id="header_about_us">
        <div class="container-vmf">
            <div class="about_company">
                <h2>О компании</h2>
                <div class="about_company__block">
                    <div class="about_company__block__left">
                        <div class="about_company_slider">
                            <div class="slider__wrapper">
                                <div class="slider__items">
                                    <!--                            {% for i in 1..10 %}-->
                                    <div class="slider__item">
                                        <div class="youtube">
                                            <div class="play-button" id="videoContainer"></div>
                                        </div>
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/about_company/11.png"
                                             class="lazy" alt="test">
                                        <iframe id="youtubeVideo"  src="" frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/about_company/1.jpg" alt="img">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/about_company/2.jpg" alt="img">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/about_company/3.jpg" alt="img">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/about_company/4.jpg" alt="img">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/about_company/5.jpg" alt="img">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/about_company/6.jpg" alt="img">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/about_company/7.jpg" alt="img">
                                    </div>
                                    <div class="slider__item">
                                        <img class="all_block" src="/img/rodnik/about_company/8.jpg" alt="img">
                                    </div>
                                    <!--                            {% endfor %}-->
                                </div>
                            </div>
                            <div class="about_company_slider__nav">
                                <button class="about_company_slider__arrow__left">
                                    <svg width="40" height="22" viewBox="0 0 40 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.9705 0.0297852L12.7522 1.81159L4.82355 9.74031H40V12.2602H4.82355L12.7522 20.1888L10.9705 21.9706L0 11.0002L10.9705 0.0297852Z"
                                              fill="white"/>
                                    </svg>
                                </button>
                                <div class="about_company_slider__nav__content">
                                    <div class="about_company_slider__nav__number_slider">
                                        <p id="count_slider_about_company"> 1 / 5</p>
                                    </div>
                                </div>
                                <button class="about_company_slider__arrow__right">
                                    <svg width="40" height="22" viewBox="0 0 40 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.0295 0.0297852L27.2478 1.81159L35.1764 9.74031H0V12.2602H35.1764L27.2478 20.1888L29.0295 21.9706L40 11.0002L29.0295 0.0297852Z"
                                              fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="about_company__block__right">
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/1.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>ВСЕ В ОДНОМ МЕСТЕ</p>
                                <small>Крупнейший автосервис в Евпатории - ТО, слесарный и кузовной ремонт, детейлинг,
                                    техосмотр.</small>
                            </div>
                        </div>
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/2.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>МАГАЗИН АВТОЗАПЧАСТЕЙ</p>
                                <small>Для Вашего автомобиля у нас всегда присутствуют запчасти в наличии и под
                                    заказ</small>
                            </div>
                        </div>
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/3.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>ОЗВУЧИМ СТОИМОСТЬ ДО НАЧАЛА РАБОТ</p>
                                <small>Смета оговаривается после диагностики, цена не меняется в ходе работы.</small>
                            </div>
                        </div>
                        <div class="about_company__block__right__item">
                            <img src="/img/rodnik/about_company/icon/4.svg" alt="">
                            <div class="about_company__block__right__item__text">
                                <p>ГАРАНТИЯ НА РЕМОНТ 1 ГОД</p>
                                <small>На все работы предоставляется гарантия 12 месяцев (без ограничения
                                    пробега).</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<script>

</script>
