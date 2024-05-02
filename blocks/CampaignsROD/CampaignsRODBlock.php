<?php

/*
 * 01.12.2020
 * File: CampaignsBlock.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\blocks\CampaignsROD;

use app\blocks\Block;
use app\models\Campaigns;

/**
 * Description of CampaignsBlock
 *
 * @author Александр
 */
class CampaignsRODBlock extends Block
{
    public $brand;
    public $model;
    public $campaigns;
    public $mt_0;
    public $h1;
    
    public function init() 
    {
        parent::init();
        if(is_null($this->campaigns)) {
            $this->campaigns = Campaigns::find()->where(['status' => 1])->orderBy('order')->all();
        }
    }
    
    public function run() 
    {
        $items = '';
        $mt_0 = $this->mt_0 ?? null;
        $h1 = $this->h1 ?? null;
        foreach($this->campaigns as $campaign) {            
            $items .= $this->getItem( $this->insertBrandModelName($campaign) );
        }
        return $this->render(compact('items', 'mt_0', 'h1'));
    }
    
    protected function insertBrandModelName($item) {
        if(!is_null($this->brand)) {
            $item->name = str_replace('BRAND', $this->brand->name, $item->name);
            $item->anons = str_replace('BRAND', $this->brand->name, $item->anons);
        } else {
            $item->name = str_replace('BRAND', '', $item->name);
            $item->anons = str_replace('BRAND', '', $item->anons);
        }
        if(!is_null($this->model)) {
            $item->name = str_replace('MODEL', $this->model->name, $item->name);
            $item->anons = str_replace('MODEL', $this->model->name, $item->anons);
        } else {
            $item->name = str_replace('MODEL', '', $item->name);
            $item->anons = str_replace('MODEL', '', $item->anons);
        }
        return $item;        
    }
    
}
