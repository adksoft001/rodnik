<?php

/*
 * 03.12.2020
 * File: DynamicRoute.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\components;

use Yii;
use yii\base\BootstrapInterface;
use app\models\{Brands, Models, IndependensServices, CommonServices};

/**
 * Description of DynamicRouteSubdomain
 *
 * @author nelset.com team
 */
class DynamicRouteSubdomain implements BootstrapInterface
{
    
//    public function bootstrap($app)
//    {

//        $brands = Brands::find()->select(['url'])->asArray()->all();
//        $models = Models::find()->select(['url'])->asArray()->all();
//        $commonServices = CommonServices::find()->select(['url'])->asArray()->all(); // Вот тут если CommonServices больше ~700 то выкидывает на ошибку!
//        $indepServices = IndependensServices::find()->select(['url'])->asArray()->all();
//        $routeArray = [];
//
//        // brands
//        $controllers = [];
//        foreach($brands as $row) {
//            $controllers[] = $row['url'];
//        }
//        /*$alias = '<action:(' . implode('|', $controllers) . ')>';
//        $rule = 'brands/item';
//        $routeArray[] = ['class' => 'yii\web\UrlRule', 'pattern' => $alias, 'route' => $rule];*/
//
//        // brand services
//        $servicesActions = [];
//        foreach($commonServices as $row) {
//            $servicesActions[] = $row['url'];
//        }
//        $alias = '<action:(' . implode('|', $servicesActions) . ')>';
//        $rule = 'brands/service-subdomain';
//        $routeArray[] = ['class' => 'yii\web\UrlRule', 'pattern' => $alias, 'route' => $rule];
//
//        // models
//        $modelActions = [];
//        foreach($models as $row) {
//            $modelActions[] = $row['url'];
//        }
//        //<controller:(' . implode('|', $controllers) . ')>/
//        $alias = '<action:(' . implode('|', $modelActions) . ')>';
//        $rule = 'model/index-subdomain';
//        $routeArray[] = ['class' => 'yii\web\UrlRule', 'pattern' => $alias, 'route' => $rule];
//
//        // model services
//        //<controller:(' . implode('|', $controllers) . ')>/
//        $alias = '<action:(' . implode('|', $modelActions) . ')>/<service:(' . implode('|', $servicesActions) . ')>';
//        $rule = 'model/service-subdomain';
//        $routeArray[] = ['class' => 'yii\web\UrlRule', 'pattern' => $alias, 'route' => $rule];
//
//        // independence services
//        $actions = [];
//        foreach($indepServices as $row) {
//            $actions[] = $row['url'];
//        }
//        $alias = '<action:(' . implode('|', $actions) . ')>';
//        $rule = 'service/item';
//        $routeArray[] = ['class' => 'yii\web\UrlRule', 'pattern' => $alias, 'route' => $rule];
//
//        $app->urlManager->addRules($routeArray);
//    }
    
}
