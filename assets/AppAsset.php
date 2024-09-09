<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    
    public $baseUrl = '@web';
    
    public $css = [
        'css/style.min.css',
        'css/libs/jquery.fancybox.min.css',
        'css/custom.css',
        'css/style-mig.css',
        'css/custom-mig.css',
        'css/libs.min.css',
        'css/about_company.css',
        'css/simple-adaptive-slider.min.css',
        'css/where_are_we.css',
        'css/footer.css',
        'css/tehosmotr.css',
        'css/libs/jquery.fancybox.min.css',
        'css/vide_widget.css'
    ];
    
    public $js = [
        'js/main.min.js',
        'js/custom.js',
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',
        'js/collapse.js',
        'js/dropdown.js',
        'js/util.js',
        'js/simple-adaptive-slider.js',
        'js/slider.js',
        'js/map.js',
        "js/video-widget.js"

    ];
    
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\web\JqueryAsset',
    ];
}
