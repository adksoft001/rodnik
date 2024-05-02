<?php

/*
 * 02.12.2020
 * File: group.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

?>
<!--<div class="accordion_anchor" id="--><?php //= str_replace([' ', '(', ')'], '_', $group); ?><!--">-->
<!--<div class="accordion_item --><?php //= ($iter == 1 ? 'db active_block' : ''); ?><!--">-->
<!--    <h3 class="title_block b5bgc--><?php //= $iter; ?><!--">--><?php //= $group; ?><!--</h3>-->
<!--    <div class="info">-->
<!--        --><?php //= $items; ?>
<!--    </div>-->
<!--</div>-->
<!--</div>-->
<div class="price_category">
    <div id="price-<?= str_replace([' ', '(', ')'], '_', $group); ?>" class="calc__price_category">
        <div class="cals__price_category_left">
            <img class="img-svg" src="/img/serviceIcon/<?= str_replace([' ', '(', ')'], '_', $group); ?>.svg" alt="">
            <span><?= $group; ?></span>
        </div>
        <svg class="price_btn" width="33" height="33" viewBox="0 0 44 44" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M21.9993 3.66675C11.8793 3.66675 3.66602 11.8801 3.66602 22.0001C3.66602 32.1201 11.8793 40.3334 21.9993 40.3334C32.1194 40.3334 40.3327 32.1201 40.3327 22.0001C40.3327 11.8801 32.1194 3.66675 21.9993 3.66675ZM31.166 23.8334H23.8327V31.1667H20.166V23.8334H12.8327V20.1667H20.166V12.8334H23.8327V20.1667H31.166V23.8334Z"
                  fill="#0039a6"/>
        </svg>
    </div>
    <ul class="calc__price_subcategory">
        <?= $items; ?>
    </ul>
</div>