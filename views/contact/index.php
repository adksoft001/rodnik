<?php

/*
 * 03.12.2020
 * File: index.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 *
 * Author: Gafuroff Alexandr
 * E-mail: gafuroff.al@yandex.ru
 */

use yii\widgets\Breadcrumbs;

use app\blocks\ContactsInPage\ContactsInPageBlock;


// Получаем данные для главных страниц разделов (и приравненых к таковым)
$currentPage = Yii::$app->controller->currentPage;

// Генерация метатегов
$this->title = $currentPage->getTitle();
$this->registerMetaTag(['name' => 'description', 'content' => $currentPage->getDescription()]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $currentPage->getKeywords()]);

// Хлебные крошки
$this->params['breadcrumbs'][] = $currentPage->name;

// Canonical
$this->params['canonical'] = $currentPage->url;

?>
<!-- Первый блок начало-->
<?= ContactsInPageBlock::block(); ?>
<!-- Конец Первый блок-->



