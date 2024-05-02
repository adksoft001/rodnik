<?php
/*
 * 30.11.2020
 * File: block.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */
?>
<div class="accordion_anchor" id="header_contacts">
    <div class="where_are_we">
        <div class="container-vmf">
            <h2>Автосервис <?= $this->brandName; ?> «СТО Родник»</h2>

            <div class="where_are_we__item" id="map_nauch">
                <div class="ymap-container-naych where_are_we__item__left lazy" data-bg="url(/img/map/naych.png)">
                    <div class="loader loader-default"></div>
                    <div id="map-yandex-naych"></div>
                </div>
                <div class="where_are_we__item__center" style="text-align: center;">


                    <div class="contacts-item__phone">
                        <a class="map-phone main-phone" href="tel:+79780776282"><b>8 (978) 077-62-82 - Основной</b></a>
                        </br>
                        <a class="map-phone " href="tel:+79782379838">8 (978) 237-98-38 - Дополнительный</a></br>

                        <a class="map-phone" href="tel:+79787321600"><b>8 (978) 732-16-00 - Кузовной ремонт</b></a></br>
                        <a class="map-phone" href="tel:+79785408282">8 (978) 540-82-82 - Детейлинг и мойка</a></br>
                        <a class="map-phone" href="tel:+79787626595"><b>8 (978) 762-65-95 - Автозапчасти</b></a></br>


                        <a class="map-phone" href="tel:+79787192690">8 (978) 719-26-90 - Эвакуатор</a></br>
                        <a class="map-phone" href="tel:+79787135553"><b>8 (978) 713-55-53 - Техосмотр</b></a></br>


<!--                        <a class="map-phone" href="tel:+79785208282">8 (978) 520-82-82 - Изготов-ие гос номера</a>-->


                    </div>

                    <div class="where_are_we__item__center__button">
                        <!--                    {#                    <button class="open_popup" data-title-popup="Оставить заявку">записаться</button>#}-->
                        <button class="open_popup modal-form-open" data-toggle="modal" data-type="consultation"
                                data-name="Получить консультацию">Записаться
                        </button>
                        <a class="hide_mobile" href="https://yandex.ru/navi?rtext=45.255378%2C33.379174~45.221974%2C33.353902&rtt=auto" target="_blank">построить
                            маршрут</a>
                        <a class="hide_desktop" href="https://yandex.ru/maps/-/CCUVuPtq-B" target="_blank">Построить
                            маршрут</a>
                        <!--                    yandexnavi://build_route_on_map?lat_to=55.892138&lon_to=37.524166/-->
                    </div>
                    <!--                45.221999, 33.353764-->
                </div>
                <div class="where_are_we__item__right">
                    <div class="where_are_we_slider">
                        <div class="slider__wrapper">
                            <?php if ($this->serviceId === 306): ?>
                                <div class="slider__items">
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/detejling/1.png"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/detejling/3.png"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/detejling/5.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/detejling/6.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/detejling/7.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/detejling/8.jpeg"
                                             class="lazy" alt="test">
                                    </div>
                                </div>
                            <?php elseif(in_array($this->serviceId, [474, 500, 4])): ?>
                                <div class="slider__items">
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/kuzov/1.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/kuzov/2.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/kuzov/3.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/kuzov/4.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/kuzov/5.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/kuzov/6.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/kuzov/7.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/kuzov/8.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="slider__items">

                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/about_company/1.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/about_company/2.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/about_company/3.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/about_company/4.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/about_company/5.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/about_company/6.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/about_company/7.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                    <div class="slider__item">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAcIAAAEsAQMAAABqmCH0AAAAA1BMVEX///+nxBvIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAKElEQVR4nO3BMQEAAADCoPVPbQsvoAAAAAAAAAAAAAAAAAAAAACAtwFD+AAB2kI1ugAAAABJRU5ErkJggg=="
                                             data-src="/img/rodnik/about_company/8.jpg"
                                             class="lazy" alt="test">
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="where_are_we_slider__nav">
                            <button class="where_are_we_slider__arrow__left">
                                <svg width="40" height="22" viewBox="0 0 40 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9705 0.0297852L12.7522 1.81159L4.82355 9.74031H40V12.2602H4.82355L12.7522 20.1888L10.9705 21.9706L0 11.0002L10.9705 0.0297852Z"
                                          fill="white"/>
                                </svg>
                            </button>
                            <div class="where_are_we_slider__nav__content">
                                <div class="where_are_we_slider__nav__number_slider">
                                    <p id="count_slider_where_are_we"> 1 / 5</p>
                                </div>
                            </div>
                            <button class="where_are_we_slider__arrow__right">
                                <svg width="40" height="22" viewBox="0 0 40 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29.0295 0.0297852L27.2478 1.81159L35.1764 9.74031H0V12.2602H35.1764L27.2478 20.1888L29.0295 21.9706L40 11.0002L29.0295 0.0297852Z"
                                          fill="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!--                    <button class="open_popup" data-title-popup="Оставить заявку">записаться</button>-->
                </div>
                <!--                <button class="open_popup" data-title-popup="Оставить заявку">записаться</button>-->
            </div>
        </div>
        <div class="where_are_we__item__line"></div>
    </div>
</div>