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

<div class="video-widget" data-state="default">
    <div class="video-widget__container">
        <?php if ($serviceId && $url && $serviceId !== 306 ): ?>
            <video id="video-widget__video" loop="" autoplay="" playsinline="" preload="auto" muted="muted"
                   controlslist="nodownload"
                   disablepictureinpicture="" class="video-widget__video  lazy"
                   data-src="/video/services.m4v?dl=01">
            </video>
        <?php elseif ($serviceId === 306 || $url === 'detejling') : ?>
            <video id="video-widget__video" loop="" autoplay="" playsinline="" preload="auto" muted="muted"
                   controlslist="nodownload"
                   disablepictureinpicture="" class="video-widget__video  lazy"
                   data-src="/video/detailing.mp4?dl=02">
            </video>
        <?php else : ?>
            <video id="video-widget__video" loop="" autoplay="" playsinline="" preload="auto" muted="muted"
                   controlslist="nodownload"
                   disablepictureinpicture="" class="video-widget__video  lazy"
                   data-src="/video/general.m4v?dl=03">
            </video>

        <?php endif; ?>
        <div class="video-widget__close"></div>
    </div>
</div>