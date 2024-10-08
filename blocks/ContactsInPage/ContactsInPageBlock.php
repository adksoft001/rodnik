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

namespace app\blocks\ContactsInPage;

use Yii;
//use app\blocks\Block;
use app\blocks\Block;
//use app\models\IndependensServices;

/**
 * Description of ServicesBlock
 *
 * @author Александр
 */
class ContactsInPageBlock extends Block
{
    /**
     * @var app\models\IndependensServices
     */
    public $services;
    public $brandName;
    
    public function init() 
    {
        parent::init();
//        if(isset(Yii::$app->controller->services) AND !is_null(Yii::$app->controller->services) AND is_null($this->services)) {
//            $this->services = Yii::$app->controller->services;
//        }
//        if(is_null($this->services)) {
//            $this->services = IndependensServices::find()
//                    ->where(['is', 'parent_id', new \yii\db\Expression('null')])
//                    //->andWhere(['not in', 'id', [6, 8]])
//                    ->all();
//        }
    }
    
    public function run() 
    {
//        $counter = 0;
//        $items = '';
//        foreach($this->services as $service) {
//            $counter++;
//            $extClass = $this->getExtendClass(0);
//            $item = $this->getItem('', compact('extClass'));
//        }
        ob_start();
        include __DIR__ . '/views/block.php';
        return ob_get_clean();
//        return $this->render(compact('item'));
    }
  
//    protected function getExtendClass($counter)
//    {
//        if($counter <= 4) {
//            return '';
//        }
//        if($counter > 4 AND $counter <= 6) {
//            return 'dn990';
//        }
//        if($counter > 6 AND $counter <= 8) {
//            return 'cenablockdn dn1200';
//        }
//        return 'cenablockdn';
//    }
    
}
