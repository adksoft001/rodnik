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
    public $brand;
    public $model;
    public $serviceId;
    public function run() 
    {
        return $this->render([
            'brand' => $this->brand,
            'model' => $this->model,
            'serviceId' => $this->serviceId
        ]);
    }
    
}
