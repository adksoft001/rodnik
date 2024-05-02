<?php

/*
 * 30.11.2020
 * File: ServicesBlock.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\blocks\ServicesROD;

use Yii;
//use app\blocks\Block;
use app\blocks\Block;
//use app\models\IndependensServices;

/**
 * Description of ServicesBlock
 *
 * @author Александр
 */
class ServicesRODBlock extends Block
{
    /**
     * @var app\models\IndependensServices
     */
    public $services;
    public $currentPage;

    public function init()
    {
        parent::init();
        if (isset(Yii::$app->controller->services) and !is_null(Yii::$app->controller->services) and is_null($this->services)) {
            $this->services = Yii::$app->controller->services;
        }
        $this->currentPage = is_null($this->currentPage) ? null : $this->currentPage;
    }

    public function run()
    {
        return $this->render([
            'currentPage' => $this->currentPage
        ]);
    }
  
//    protected function getExtendClass($counter)
//    {
//        if($counter <= 4) {
//            return '';
//        }
//        if($counter > 4 AND $counter <= 6) {
//            return 'dn990';
//        }
//        if($counter > 6 AND $counter <= 8) {
//            return 'cenablockdn dn1200';
//        }
//        return 'cenablockdn';
//    }
    
}
