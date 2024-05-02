<?php

/*
 * 2021 Jan 31
 * File: OurworksBlock.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\blocks\OurSercificate;

use Yii;
use app\blocks\Block;
use app\models\Ourworks;

/**
 * Description of OurworksBlock
 *
 * @author Александр
 */
class OurSercificateBlock extends Block
{
    public function run() 
    {        
//        $ourWorks = Ourworks::find()->where(['url_page' => Yii::$app->request->url])->one();

        $ourWorks = [
          '0.jpg',
          '1.jpg',
          '3.jpg',
          '4.jpg',
          '5.jpg',
          '6.jpg',
          '7.jpg',
          '8.jpg',

        ];

        if($ourWorks) {
            $itemsSlider = '';
//            foreach(explode('|', $ourWorks->images) as $image)
            foreach($ourWorks as $image)
//            echo $image;
            {
                $itemsSlider .= $this->getItem($image, [], 'item_slider');
            }
            return $this->render(compact('itemsSlider'));
        }
        return '';
//        ob_start();
//        include __DIR__ . '/views/block.php';
//        return ob_get_clean();
    }
}
