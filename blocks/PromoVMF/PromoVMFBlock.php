<?php

/*
 * 24.11.2020
 * File: PromoBlock.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\blocks\PromoVMF;

use Yii;
use app\blocks\Block;

/**
 * Description of PromoWidget
 *
 * @author Александр
 */
class PromoVMFBlock extends Block
{
    
    public $h1;
    public $brandName;
    public $modelName;
    public $detailing;
    public $groupId;
    public $serviceId;
    
    public function init()
    {
        parent::init();
        $this->h1 = is_null($this->h1) ? Yii::$app->controller->currentPage->header : $this->h1;
        if(!empty($this->brandName) || !empty($this->modelName)){
            $this->h1 .= ' в Москве';
        }
        $this->brandName = is_null($this->brandName) ? '' : ' ' . $this->brandName;
        $this->modelName = is_null($this->modelName) ? '' : ' ' . $this->modelName;
        $this->groupId = is_null($this->groupId) ? null : $this->groupId;
    }
    
    public function run() 
    {
        return $this->render([
            'h1' => $this->h1,
            'brandName' => $this->brandName,
            'modelName' => $this->modelName,
            'detailing' => $this->detailing,
            'groupId' => $this->groupId,
            'serviceId' => $this->serviceId
        ]);
    }
    
}
