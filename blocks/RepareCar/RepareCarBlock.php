<?php

/*
 * 16.12.2020
 * File: RepareCarBlock.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\blocks\RepareCar;

use app\blocks\Block;

/**
 * Description of RepareCarBlock
 *
 * @author Александр
 */
class RepareCarBlock extends Block
{
    public $brand;
    public $model;
    public $subdomain;

    //block.html href="<?= $url; "
   
    public function run()
    {

        if ($this->subdomain == true){
            $url = "";
            $imageSrc = strtolower($this->brand->url);
        } else {
            $url = '/' .$this->brand->url;
            $imageSrc = strtolower($url);
        }
        $header = $this->brand->header;
        $hide_url_price_list = 0;
        if(!is_null($this->model)) {
            if ($this->subdomain == true){
                $url .= '/' . $this->model->url;
                $imageSrc = strtolower($this->brand->url.'/' . $this->model->url);
            } else {
                $url .= '/' . $this->model->url;
                $imageSrc = strtolower($url);
            }
            $header = 'Ремонт '. $this->brand->name. ' ' .$this->model->name.' '.$this->model->rus_name;;
            $hide_url_price_list = $this->model->hide_url_price_list;
        }
        $brand = $this->brand;
        $model = $this->model;
        return $this->render(compact('url', 'imageSrc', 'header', 'hide_url_price_list','brand', 'model'));
    }    
}
