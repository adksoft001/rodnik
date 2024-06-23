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
    public $serviceParentId;
    public function run()
    {
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

        if ($ourWorks) {
            $itemsSlider = '';
            foreach ($ourWorks as $image) {
                if ($this->serviceParentId == 306 && $image == '0.jpg') {
                    $image = 'Datailing.jpg';
                }
                $itemsSlider .= $this->getItem($image, [], 'item_slider');
            }
            return $this->render(compact('itemsSlider'));
        }
        return '';
    }
}
