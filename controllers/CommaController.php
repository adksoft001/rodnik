<?php

/*
 * 26.11.2020
 * File: SiteController.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\controllers;

use Yii;
use yii\web\Response;
use app\controllers\AppBaseController;

class CommaController extends AppBaseController
{
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionOils()
    {
        $this->initCurrentPageData();
        $this->getLastModified();
        Yii::$app->seo->setData($this->currentPage);
        
        return $this->render('oils');
    }

    public function actionAntifriz()
    {
        $this->initCurrentPageData();
        $this->getLastModified();
        Yii::$app->seo->setData($this->currentPage);

        return $this->render('antifriz');
    }

    public function actionTormoz()
    {
        $this->initCurrentPageData();
        $this->getLastModified();
        Yii::$app->seo->setData($this->currentPage);

        return $this->render('tormoz');
    }

    public function actionTransmissiya()
    {
        $this->initCurrentPageData();
        $this->getLastModified();
        Yii::$app->seo->setData($this->currentPage);

        return $this->render('transmissiya');
    }


}
