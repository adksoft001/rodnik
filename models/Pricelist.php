<?php

/*
 * 30.11.2020
 * File: Pricelist.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\models;

use app\models\AppActiveRecord;
use app\models\IndependensServices;
use app\models\CommonServices;

/**
 * Description of Pricelist
 *
 * @author Александр
 */
class Pricelist extends AppActiveRecord 
{
    public $children = [];
    public $href;
    
    public static function tableName() 
    {
        return 'pricelist';
    }
    
    public function isertChild($child, $first = false) {
        if($first) {
            array_unshift($this->children, $child);
        } else {
            $this->children[] = $child;
        }        
    }
    
    public function getIndepservice()
    {
        return $this->hasOne(IndependensServices::className(), ['price_id' => 'id']);
    }
    
    public function getCommonservice()
    {
        return $this->hasOne(CommonServices::className(), ['price_id' => 'id']);
    }
}
