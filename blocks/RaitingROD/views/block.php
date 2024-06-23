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
<div class="accordion_anchor" id="header_raiting">
    <div class="raiting">
        <div class="container">
            <h2>Независимые отзывы:</h2>

            <div class="raiting_description" itemprop="aggregateRating" itemscope="itemscope"
                 itemtype="http://schema.org/AggregateRating">
                <meta itemprop="worstRating" content="1">
                <span class="stars">
                    <span class="star on"></span>
                    <span class="star on"></span>
                    <span class="star on"></span>
                    <span class="star on"></span>
                    <span class="star half"></span>
                </span>
                <b class="point" itemprop="ratingValue">4.9</b>
                <span class="iz">из</span>
                <span class="iz" itemprop="bestRating">5</span>
                <i class="vsego" itemprop="ratingCount">15 оценок</i>
                <span class="desc">Рейтинг составлялся по отзывам от клиентов.</span>
            </div>

            <div class="raiting_block">

                <a class="integrator_card"
                   href="https://www.avito.ru/user/55996e1375acdf9d4a7ce51acad7a335/profile?src=seller_link&page_from=public_profile&review_page_from=public_profile&review_add_trigger=seller_link#open-reviews"
                   target="_blank">
                    <div class="integrator">
                        <img class="int_logo" src="/img/integrator_logo/avito.webp">
                        <i class="int_rait">Рейтинг</i>
                        <div class="int_stars">
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star on"></span>
                        </div>
                        <i class="int_five">5 из 5</i>
                    </div>
                </a>
                <?php if ($serviceParentId == 306): ?>

                    <a class="integrator_card" href="https://yandex.ru/maps/-/CDvAI6ir" target="_blank">
                        <div class="integrator">
                            <img class="int_logo" src="/img/integrator_logo/yandex.webp">
                            <i class="int_rait">Рейтинг</i>
                            <div class="int_stars">
                                <span class="star on"></span>
                                <span class="star on"></span>
                                <span class="star on"></span>
                                <span class="star on"></span>
                                <span class="star half"></span>
                            </div>
                            <i class="int_five">5.0 из 5</i>
                        </div>
                    </a>

                <?php else: ?>
                    <a class="integrator_card" href="https://yandex.ru/maps/-/CCUVaJFdTC" target="_blank">
                        <div class="integrator">
                            <img class="int_logo" src="/img/integrator_logo/yandex.webp">
                            <i class="int_rait">Рейтинг</i>
                            <div class="int_stars">
                                <span class="star on"></span>
                                <span class="star on"></span>
                                <span class="star on"></span>
                                <span class="star on"></span>
                                <span class="star half"></span>
                            </div>
                            <i class="int_five">4.7 из 5</i>
                        </div>
                    </a>
                <?php endif; ?>

                <a class="integrator_card" href="https://goo.gl/maps/oHNYLxpZhUqjQsdS8" target="_blank">
                    <div class="integrator">
                        <img class="int_logo" src="/img/integrator_logo/google.webp">
                        <i class="int_rait">Рейтинг</i>
                        <div class="int_stars">
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star half"></span>
                        </div>
                        <i class="int_five">4.3 из 5</i>
                    </div>
                </a>
                <a class="integrator_card" href="https://go.2gis.com/6fve1">
                    <div class="integrator">
                        <img class="int_logo" src="/img/integrator_logo/2gis.webp" target="_blank">
                        <i class="int_rait">Рейтинг</i>
                        <div class="int_stars">
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star on"></span>
                        </div>
                        <i class="int_five">5 из 5</i>
                    </div>
                </a>

            </div>

        </div>

    </div>


</div>