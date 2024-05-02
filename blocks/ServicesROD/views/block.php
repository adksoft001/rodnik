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
<div class="accordion_anchor" id="header_services">
<div class="block cenablock">
    <div class="container container2">
        <?php if ($currentPage && $currentPage->url == 'services'): ?>
            <?php
            echo '<h1 class="zag">'. $currentPage->name . '</h1>';
        else:
            ?>
            <div class="zag">Услуги и цены</div>
        <?php endif; ?>
        <div class="row">

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="cenablock-card cenablock-tehnicheskoe_obsluzhivanie">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/tekhnicheskoe-obsluzhivanie">
                                    Техническое обслуживание
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Техническое_обслуживание" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="cenablock-card cenablock-diagnostika_avtomobilia">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/diagnostika">
                                    Диагностика
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Диагностика" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="cenablock-card cenablock-remont_dvigatelia">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/remont-dvigatelya-avtomobilya">
                                    Ремонт двигателя
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Ремонт_двигателя" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="cenablock-card cenablock-remont_hodovoi_chasti_podveski_avtomobilia">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/remont-hodovoj-podveski">
                                    Ремонт ходовой (подвески)
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Ремонт_подвески__ходовой_" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 dn990">
                <div class="cenablock-card cenablock-moika_himchistka_polirovka_avtomobilia">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/pokraska-kuzova">
                                    Покраска кузова
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Покраска_кузова" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 dn990">
                <div class="cenablock-card cenablock-kuzovnoi_remont">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/kuzovnoj-remont">
                                    Кузовной ремонт
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Кузовной_ремонт" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 cenablockdn dn1200">
                <div class="cenablock-card cenablock-detejling">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/detejling">
                                    Детейлинг
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Ремонт_и_тормозной_системы" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 cenablockdn dn1200">
                <div class="cenablock-card cenablock-remont_elektrooborudovaniia">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/remont-ehlektrooborudovaniya">
                                    Ремонт электрооборудования
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Ремонт_электрооборудования" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 cenablockdn">
                <div class="cenablock-card cenablock-remont_transmissii">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/remont-transmissii">
                                    Ремонт трансмиссии
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Ремонт_трансмиссии" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 cenablockdn">
                <div class="cenablock-card cenablock-remont_toplivnoi__sistemy">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/remont-dizelnyh-dvigatelej">
                                    Ремонт дизельных двигателей
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Ремонт_дизельных_двигателей" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 cenablockdn">
                <div class="cenablock-card cenablock-remont_vyhlopnoi__sistemy">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/remont-glushitelya">
                                    Ремонт глушителя
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Ремонт_глушителя" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 cenablockdn">
                <div class="cenablock-card cenablock-dopolnitelnoe-oborudovanie">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/dopolnitelnoe-oborudovanie">
                                    Дополнительное оборудование
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Дополнительное оборудование" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 cenablockdn">
                <div class="cenablock-card cenablock-shinomontazh">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/shinomontazh">
                                    Шиномонтаж
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Шиномонтаж" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 cenablockdn">
                <div class="cenablock-card cenablock-remont_rulevogo_upravleniia">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/remont-rulevogo-upravleniya">
                                    Ремонт рулевого управления
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Ремонт_рулевого_управления" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 cenablockdn">
                <div class="cenablock-card cenablock-remont_tormoznoi_sistemy">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/remont-tormoznoj-sistemy">
                                    Ремонт тормозной системы
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Ремонт_и_тормозной_системы" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6 cenablockdn">
                <div class="cenablock-card cenablock-kuzovnoi_remont">
                    <div class="cenablock-card-ten">
                        <div class="cenablock-card-abs">
                            <div class="cenablock-card-abs-text">
                                <a href="/remont-avtostekol">
                                    Ремонт автостекол
                                </a>
                            </div>
                            <div class="cenablock-card-abs-btnwrap">
                                <a href="#Ремонт_автостекол" class="mbtn mbtn2">Цена</a>
                                <a href="#" class="mbtn mbtng modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="cenablock-pokwrap">
            <div class="cenablock-pokbtn mbtn mbtn2 mbtn2g">Развернуть больше услуг</div>
        </div>
    </div>
</div>
</div>