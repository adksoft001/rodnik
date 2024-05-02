<?php

/*
 * 03.12.2020
 * File: FooterServicesWidget.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\widgets\FooterServices;

use app\widgets\DropdownServices\DropdownServicesWidget;
use app\helpers\Subdomains;

/**
 * Description of FooterServicesWidget
 *
 * @author Александр
 */
class FooterServicesWidget extends DropdownServicesWidget
{   
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $params = $this->getParams();
        $params['counter'] = 0;
        $items = '';
        foreach($this->services as $item) {
            $params['counter']++;
            $items .= $this->getItem($item, $params);
        }
        return $this->render(compact('items'));
    }
    
    protected function getParams() 
    {
        $params = [];
        $params['subdomain'] = Subdomains::getStatus();
        $params['length'] = count($this->services);
        $params['divide'] = round($params['length'] / 3, 0, PHP_ROUND_HALF_UP);
        if($params['length'] % 3 != 0) {
            $params['divide']++;
        }
        return array_merge($this->params, $params);
    }
    
}
