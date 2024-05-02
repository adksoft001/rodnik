<?php

/*
 * 2021 Jan 31
 * File: UnderpriceBlock.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\blocks\UnderpriceROD;

use app\blocks\Block;

/**
 * Description of UnderpriceBlock
 *
 * @author Александр
 */
class UnderpriceRODBlock extends Block
{
    public $brand;
    public $model;
    public $detailing;
    public $serviceId;

    public function run()
    {
        return $this->render([
            'brand' => $this->brand ? $this->brand->name : '',
            'model' => $this->model ? $this->model->name : '',
            'detailing' => $this->detailing,
            'serviceId' => $this->serviceId,
        ]);
    }
}
