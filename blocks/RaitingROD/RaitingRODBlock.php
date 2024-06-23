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

namespace app\blocks\RaitingROD;

use Yii;
//use app\blocks\Block;
use app\blocks\Block;


/**
 * Description of ServicesBlock
 *
 * @author Александр
 */
class RaitingRODBlock extends Block
{
    public $serviceParentId;
    /**
     * @var app\models\IndependensServices
     */
    public $services;
    
    public function init() 
    {
        parent::init();
    }
    
    public function run() 
    {
       return $this->render([
           'serviceParentId' => $this->serviceParentId
       ]);
    }
}
