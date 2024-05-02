<?php

/*
 * 30.01.2021
 * File: ModelsliderBlock.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\blocks\Modelslider;

use Yii;
use app\blocks\Block;
use app\models\Models;

/**
 * Description of BrandsliderBlock
 *
 * @author Александр
 */
class ModelsliderBlock extends Block
{
   /**
    * @var app\models\Brands
    */
    public $brand;
    public $models;
    public $subdomain;
    
    public function init() 
    {
        parent::init();
        $this->models = Models::find()
                ->where(['brand_id' => $this->brand->id])
                ->andWhere(['status' => 1])
                ->orderBy('order')
                ->all();
    }
    
    public function run() 
    {
        $itemsSlider = '';
        $itemsPanel = '';
        foreach($this->models as $model)
        {

            if ($this->subdomain == true){
            } else { }
                $model->url = $this->brand->url . '/' . $model->url;
                error_log($model->url);

            $itemsSlider .= $this->getItem($model, [], 'item_slider');
            $itemsPanel .= $this->getItem($model, [],  'item_panels');

        }
        return $this->render(compact('itemsSlider', 'itemsPanel'));
    }
    
}
