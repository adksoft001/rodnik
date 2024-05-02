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

namespace app\blocks\Promo;

use Yii;
use app\blocks\Block;

/**
 * Description of PromoWidget
 *
 * @author Александр
 */
class PromoBlock extends Block
{

    public $h1;
    public $brandName;
    public $modelName;
    public $serviceName;
    public $detailing;
    public $groupId;
    
    public function init()
    {
        parent::init();

        if(!empty($this->brandName) || !empty($this->modelName)){
            $this->h1 .= ' в Евпатории';
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
            'serviceName' => $this->serviceName
        ]);
    }
    
}
