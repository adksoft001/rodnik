<?php

namespace app\blocks\OurPhoto;

use app\blocks\Block;
use app\models\Ourworks;
use Yii;

class OurPhotoBlock extends Block
{
    public function run()
    {
        $ourWorks = Ourworks::find()->where(['url_page' => Yii::$app->request->url])->one();
        if (!$ourWorks) {
            $dir = getcwd() . '/uploads/images/services/';
            $files = array_diff(scandir($dir), array('..', '.'));
            $f = [];
            while (count($f) < 6) {
                $f[] = $files[rand(2, 107)];
            }
            $ourWorks = new Ourworks();
            $ourWorks->url_page = Yii::$app->request->url;
            $ourWorks->images = implode('|', $f);
            $ourWorks->save();
        }
        $itemsSlider = '';
        foreach (explode('|', $ourWorks->images) as $image) {
            $itemsSlider .= $this->getItem($image, [], 'item_slider');
        }
        return $this->render(compact('itemsSlider'));
    }
}