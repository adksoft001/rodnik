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


<div class="block1">
    <div class="block1-wraper">
        <div class="container ">

            <?php if ($_SERVER['REQUEST_URI'] == '/') : ?>
                <h1>Автосервис «СТО Родник» — ремонт авто в Евпатории</h1>
            <?php elseif ($modelName): ?>
                <h1>Ремонт и сервис <?= $brandName . ' ' . $modelName; ?> в Евпатории</h1>
            <?php elseif ($serviceName): ?>
                <h1><?= $serviceName ?>  <?= $brandName; ?> в Евпатории</h1>
            <?php elseif ($brandName): ?>
                <h1>Ремонт и сервис <?= $brandName; ?> в Евпатории</h1>
            <?php else: ?>
                <h1><?= $h1; ?> в Евпатории</h1>
            <?php endif; ?>

            <?php if ($groupId === 323) : ?>

                <div class="block1-btnwrap">

                    <div class="mbtn mbtn2 mbtn2r modal-form-open" data-name="Получить консультацию"
                         data-type="consultation">Получить консультацию
                    </div>

                    <div class="mbtn mbtnot modal-form-open" data-name="Записаться" data-type="repaire">
                        Записаться
                    </div>

                    <div class="mbtn mbtn2 modal-form-open" data-name="Узнать стоимость" data-type="know">
                        Узнать стоимость
                    </div>

                </div>

            <?php else: ?>

                <div class="block1-btnwrap">
                    <div class="mbtn mbtn2 modal-form-open" data-name="Бесплатная диагностика" data-type="diagnostic">
                        Диагностика
                    </div>

                    <div class="mbtn mbtnot modal-form-open" data-name="Запись на ремонт / ТО" data-type="repaire">
                        Запись на ремонт / ТО
                    </div>

                    <div class="mbtn mbtn2 mbtn2r modal-form-open" data-name="Получить консультацию"
                         data-type="consultation">Получить консультацию
                    </div>
                </div>

            <?php endif; ?>

        </div>
        <div class="block1-utpwrap">
            <div class="container">
                <div class="row">
                    <?php if ($groupId === 323) : ?>
                        <div class="col-lg-4">
                            <div class="utp">Комплексный уход за авто</div>
                        </div>
                        <div class="col-lg-4">
                            <div class="utp utp2">Доступные цены</div>
                        </div>
                        <div class="col-lg-4">
                            <div class="utp utp3">Материалы премиум класса</div>
                        </div>

                    <?php elseif(in_array($groupId, [491, 4, 517])):?>
                        <div class="col-lg-4">
                            <div class="utp">Гарантия на ремонт 6 месяцев</div>
                        </div>
                        <div class="col-lg-4">
                            <div class="utp utp2">Озвучим цену до начала работ</div>
                        </div>
                        <div class="col-lg-4">
                            <div class="utp utp3">Минимальные сроки ремонта</div>
                        </div>
                    <?php else: ?>

                        <?php if (!$brandName) : ?>
                            <div class="col-lg-4">
                                <div class="utp">Гарантия на ремонт 1 год</div>
                            </div>
                            <div class="col-lg-4">
                                <div class="utp utp2">Крупнейший автосервис в Евпатории</div>
                            </div>
                        <?php else: ?>
                            <div class="col-lg-4">
                                <div class="utp">Гарантия на ремонт <?= $brandName; ?> 1 год</div>
                            </div>
                            <div class="col-lg-4">
                                <div class="utp utp2">Крупнейший автосервис <?= $brandName; ?> в Евпатории</div>
                            </div>
                        <?php endif; ?>
                        <div class="col-lg-4">
                            <?php if ($_SERVER['REQUEST_URI'] == '/about/commercial/'): ?>
                                <div class="utp utp3">Ремонт минивэнов, фургонов, грузовиков</div>
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/about/yuridicheskie/'): ?>
                                <div class="utp utp3">Обслуживание юр лиц</div>
                            <?php else: ?>
                                <div class="utp utp3">Техцентр полного цикла</div>
                            <?php endif ?>
                        </div>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>