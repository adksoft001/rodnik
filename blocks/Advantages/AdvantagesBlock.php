<?php

/*
 * 02.12.2020
 * File: AdvantagesBlock.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\blocks\Advantages;

use app\blocks\Block;

/**
 * Description of AdvantagesBlock
 *
 * @author Александр
 */
class AdvantagesBlock extends Block
{
    public $brand;
    public $model;
    
    public function run() {
        
        $brand = $this->brand ? $this->brand->name : '';
        $model = $this->model ? $this->model->name : '';
        return $this->render(compact('brand','model'));
    }
    
}
