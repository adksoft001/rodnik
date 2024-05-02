<?php

/*
 * 16.12.2020
 * File: block.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

?>
<div class="remontblock block">

    <div class="container container2">
        <div class="zag"><?= $header; ?></div>
        <div class="row myrow">
            <div class="remontblock-img col-xl-3 ">
                <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="/uploads/images/cars/<?= $imageSrc; ?>/big.png" alt="*">
                <a href="#" class="mbtn mbtng modal-form-open" data-name="Запись на ремонт / ТО" data-type="repaire">Записаться в автосервис</a>
            </div>
            <?php
            if ($brand && !$model) {
                $url = $brand->url;
            } else {
                $url = $brand->url.'/'.$model->url;
            }
            ?>

            <div class="col-xl-3 col-lg-4  remontblock-swrap remontblock-swrap-b1">
                <a href="/<?= $url; ?>/tekhnicheskoe-obsluzhivanie/" class="beto">Техническое обслуживание</a>
                <a href="/<?= $url; ?>/remont-transmissii/" class="betransmissia">Ремонт трансмиссии</a>
                <a href="/<?= $url; ?>/remont-dvigatelya-avtomobilya/" class="bedvigatel">Ремонт двигателя</a>
                <a href="/<?= $url; ?>/remont-ehlektrooborudovaniya/" class="beacum">Ремонт электрооборудования</a>
                <a href="/<?= $url; ?>/remont-rulevogo-upravleniya/" class="berul">Ремонт рулевого управления</a>
                <a href="/<?= $url; ?>/remont-avtostekol/" class="bepolirovka">Ремонт автостекол</a>
                <!--                <a href="" class="becondicioner">Ремонт автокондионеров</a>-->
                <!--                <a href="" class="besysohl">Ремонт ситемы охлаждения</a>-->
                <a href="/<?= $url; ?>/shinomontazh/" class="bemontag">Услуги по шиномонтажу</a>
                <!--                <a href="" class="bezapchasty">Запчасти</a>-->
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 remontblock-swrap remontblock-swrap-b2">
                <a href="/<?= $url; ?>/diagnostika/" class="bediagnostika">Диагностика</a>
                <a href="/<?= $url; ?>/remont-dizelnyh-dvigatelej/" class="bedvigatel">Ремонт дизельных двигателей</a>
                <!--                <a href="" class="beacpp">Ремонт АКПП</a>-->
                <a href="/<?= $url; ?>/kuzovnoj-remont/" class="bekuzov">Кузовной ремонт</a>
                <a href="/<?= $url; ?>/remont-hodovoj-podveski/" class="behodovoi">Ремонт подвески, ходовой</a>
                <a href="/<?= $url; ?>/remont-tormoznoj-sistemy/" class="betormoz">Ремонт торомозной системы</a>
                <a href="/<?= $url; ?>/pokraska-kuzova/" class="bepokraska">Покраска кузова</a>
                <!--                <a href="" class="bebak">Ремонт топливной системы</a>-->
                <a href="/<?= $url; ?>/remont-glushitelya/" class="bevihlop">Ремонт глушителя</a>
                <!--                <a href="" class="bewelding">Аргонная сварка авто</a>-->
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 remontblock-swrap remontblock-swrap-b3">
<!--                <a href="#" class="bephoto modal-form-open" data-name="Оценить стоимость ремонта по фото" data-type="photo">Оценить стоимость ремонта по фото</a>-->
                <a href="#" class="becalc modal-form-open" data-name="Рассчитать стоимость работы" data-type="calculate">Рассчитать стоимость работы</a>
                <a href="#" class="bezapchastyrd modal-form-open" data-name="Заказать запчасти" data-type="zapchast">Заказать запчасти</a>
                <a href="#" class="bediagnost modal-form-open" data-name="Записаться на диагностику" data-type="diagnostic">Записаться на диагностику</a>
                <a href="#" class="becons modal-form-open" data-name="Получить консультацию" data-type="consultation">Получить консультацию</a>
                <a href="#" class="becons modal-form-zaloba" data-name="ОСТАВИТЬ ЖАЛОБУ" data-type="consultation">Оставить жалобу</a>
            </div>
        </div>
    </div>
</div>