<?php

/*
 * 2021 Mar 6
 * File: CampaignsController.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 *
 * Author: Gafuroff Alexandr
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\controllers;

use app\controllers\AppBaseController;
use yii\web\Response;
use Yii;
use yii\base\Controller;


/**
 * Description of CampaignsController
 *
 * @author Александр
 */
class AboutController extends AppBaseController
{
    /**
     * @return string
     */
    public function actionCommercial()
    {
        $this->initCurrentPageData();
        $this->getLastModified();
        Yii::$app->seo->setData($this->currentPage);
        return $this->render('commercial');
    }
    /**
     * @return string
     */
    public function actionYuridicheskie()
    {
        $this->initCurrentPageData();
        $this->getLastModified();
        Yii::$app->seo->setData($this->currentPage);
        return $this->render('yuridicheskie');
    }

}