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

use Yii;
use app\controllers\AppBaseController;
use app\models\Campaigns;

/**
 * Description of CampaignsController
 *
 * @author Александр
 */
class TehosmotrController extends AppBaseController
{
    /**
     * Displays site section services page.
     *
     * @return string HTML
     */
    public function actionIndex() 
    {
        $this->initCurrentPageData();
        $this->getLastModified();
        Yii::$app->seo->setData($this->currentPage);
        return $this->render('index');
    }

}
