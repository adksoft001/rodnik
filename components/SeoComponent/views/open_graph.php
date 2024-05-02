<?php

/* 
 * 27.03.2020
 * File: open_graph.php
 * Encoding: UTF-8
 * Project: tokyogarage-yii2.loc
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

use yii\helpers\Url;

?>
<meta property="og:type" content="website">
<meta property="og:image" content="<?= Url::base(true); ?>/img/logo.png">
<meta property="og:title" content="<?= $seo['title']; ?>" />
<meta property="og:keywords" content="<?= $seo['keywords']; ?>" />
<meta property="og:description" content="<?= $seo['description']; ?>" />
<meta property="og:url" content="<?= Url::base(true); ?><?= Yii::$app->request->url; ?>" />
