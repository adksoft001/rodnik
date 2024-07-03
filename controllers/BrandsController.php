<?php

/*
 * 03.12.2020
 * File: BrandsController.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\controllers;

use app\helpers\Subdomains;
use app\models\Brands;
use app\models\CommonServices;
use app\models\IndependensServices;
use app\models\Models;
use Yii;

/**
 * Description of BrandsController
 *
 * @author Александр
 */
class BrandsController extends AppBaseController
{

    /**
     * Displays site section brands page.
     *
     * @return string HTML
     */
    public function actionIndex()
    {
        $this->initCurrentPageData();
        $this->getLastModified();
        Yii::$app->seo->setData($this->currentPage);
        $brands = Brands::find()->orderBy('order')->all();
        return $this->render('index', compact('brands'));
    }

    /**
     * Displays brands item page.
     *
     * @return string HTML
     */
    public function actionItem()
    {
        $core = $this->initParentPageData();
        $this->brand = Brands::find()->where(['url' => $this->route[0]])->one();
        $this->getLastModified($this->brand->update_at);
        //$this->brand->title = 'Ремонт '.$this->brand->name. ' в Москве - автосервис '. str_replace(array('(',')'), array('',''), $this->brand->rus_name) .' Раннинг Моторс';
        $this->brand->title = 'Ремонт ' . str_replace(array('(', ')'), array('', ''), $this->brand->rus_name) . ' цена - автосервис ' . $this->brand->name . ' Раннинг Моторс в Москве';
        $this->brand->description = '⭐⭐⭐⭐⭐ Качественный ремонт ' . str_replace(array('(', ')'), array('', ''), $this->brand->rus_name) . ' в Москве. 📍 Профильный автосервис ' . $this->brand->name . '. ✅ Дешевле дилера до 60%. ✅ Гарантия на ремонт 2 года. 🚀 Ремонт ' . $this->brand->name . ' по доступным ценам ⏰ Запись в автосервис «Раннинг Моторс» ☎️ 8(499)444-14-37';
        Yii::$app->seo->setData($this->brand);

        return $this->render('item', [
            'core' => $core,
            'brand' => $this->brand,
        ]);


    }

    /**
     * Displays brand service page.
     *
     * @return string HTML
     */
    public function actionService()
    {
        $core = $this->initParentPageData();
        $this->brand = Brands::find()->where(['url' => $this->route[0]])->one();
        $service = IndependensServices::find()->where([
            'url' => $this->route[1]
        ])->one();

        return $this->render('service', [
            'core' => $core,
            'brand' => $this->brand,
            'service' => $service
        ]);
    }

}
