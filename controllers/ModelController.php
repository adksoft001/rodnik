<?php

/*
 * 2021 Jan 30
 * File: ModelController.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\controllers;

use app\helpers\Subdomains;
use app\models\IndependensServices;
use PHPUnit\Framework\Error\Error;
use Yii;
use app\controllers\AppBaseController;
use app\models\Brands;
use app\models\Models;
use app\models\CommonServices;
use app\models\CommonServicesContent;
use yii\web\NotFoundHttpException;
use function Symfony\Component\String\s;

/**
 * Description of ModelController
 *
 * @author Александр
 */



class ModelController extends AppBaseController
{
    /**
     * Displays model page.
     *
     * @return string HTML
     */

    public function actionIndex()
    {
        $this->brand = Brands::find()->where(['url' => $this->route[0]])->one();
        $this->model = Models::find()->where(['brand_id' => $this->brand->id, 'url' => $this->route[1]])->one();

        $this->model->title = 'Ремонт '. str_replace(array('(',')'), array('',''), $this->model->rus_name). ' цена - автосервис '. $this->brand->name.' '. $this->model->name. ' Раннинг Моторс в Москве';
        $this->model->description = '⭐⭐⭐⭐⭐ Качественный ремонт '. str_replace(array('(',')'), array('',''), $this->model->rus_name). ' в Москве. 📍 Профильный автосервис '. $this->brand->name. '. ✅ Дешевле дилера до 60%. ✅ Гарантия на ремонт 2 года. 🚀 Ремонт '. $this->brand->name.' '. $this->model->name. ' по доступным ценам ⏰ Запись в автосервис «Раннинг Моторс» ☎️ 8(499)444-14-37';
        Yii::$app->seo->setData($this->model);


        return $this->render('index', [
            'brand' => $this->brand,
            'model' => $this->model,
        ]); 
    }

    /**
     * Displays models service page.
     *
     * @return string HTML
     */
    public function actionService()
    {
        $this->brand = Brands::find()->where(['url' => $this->route[0]])->one();
        $this->model = Models::find()->where(['brand_id' => $this->brand->id, 'url' => $this->route[1]])->one();
        $service = IndependensServices::find()->where([
            'url' => $this->route[2]
        ])->one();


        return $this->render('service', [
            'brand' => $this->brand,
            'model' => $this->model,
            'service' => $service,
        ]);
    }

//    /**
//     * Displays model page.
//     *
//     * @return string HTML
//     */
//    public function actionIndexSubdomain()
//    {
//        $brand = Subdomains::getBrand();
//        $this->brand = Brands::find()->where(['url' => $brand])->one();
//        $this->model = Models::find()->where(['brand_id' => $this->brand->id, 'url' => $this->route[0]])->one();
//
//        $com_transport = false;
//        if(array_key_exists($this->brand->url, $this->exceptional_models)){
//            if(in_array($this->model->url, $this->exceptional_models[$this->brand->url])) {
//                $this->layout = '@app/views/layouts/main2';
//                $com_transport = true;
//            }
//        }
//
//        $this->getLastModified($this->model->update_at);
////        $this->model->title = 'Ремонт '. $this->brand->name.' '. $this->model->name. ' в Москве - автосервис '. str_replace(array('(',')'), array('',''), $this->model->rus_name). ' Раннинг Моторс';
//        $this->model->title = 'Ремонт '. str_replace(array('(',')'), array('',''), $this->model->rus_name). ' цена - автосервис '. $this->brand->name.' '. $this->model->name. ' Раннинг Моторс в Москве';
//        $this->model->description = '⭐⭐⭐⭐⭐ Качественный ремонт '. str_replace(array('(',')'), array('',''), $this->model->rus_name). ' в Москве. 📍 Профильный автосервис '. $this->brand->name. '. ✅ Дешевле дилера до 60%. ✅ Гарантия на ремонт 2 года. 🚀 Ремонт '. $this->brand->name.' '. $this->model->name. ' по доступным ценам ⏰ Запись в автосервис «Раннинг Моторс» ☎️ 8(499)444-14-37';
//        Yii::$app->seo->setData($this->model);
//        return $this->render('index', [
//            'brand' => $this->brand,
//            'model' => $this->model,
//            'comTransport' => $com_transport,
//        ]);
//    }
//
//    /**
//     * Displays models service page.
//     *
//     * @return string HTML
//     */
//    public function actionService()
//    {
//        $this->brand = Brands::find()->where(['url' => $this->route[0]])->one();
//        $this->model = Models::find()->where(['brand_id' => $this->brand->id, 'url' => $this->route[1]])->one();
//        $model_id = 0;
//        if(!empty($this->model->id))
//            $model_id = $this->model->id;
//        $service = CommonServicesContent::find()->where([
//            'url' => $this->route[2],
//            'model_id' => $model_id
//        ])->one();
//        if(empty($service)){
//            $service = CommonServices::find()->where([
//                    'url' => $this->route[2]
//            ])->one();
//        }
//        $com_transport = false;
//        if(array_key_exists($this->brand->url, $this->exceptional_models)){
//            if(in_array($this->model->url, $this->exceptional_models[$this->brand->url])) {
//                if($service->url != 'moika_himchistka_polirovka_avtomobilia') {
//                    $this->layout = '@app/views/layouts/main2';
//                    $com_transport = true;
//                }
//            }
//        }
//
//        // заглушка спецаильно для этих моделей
//        if(!empty($this->route[2])){
//            if($this->model->hide_url_price_list == 1){
//                switch ($this->route[2]){
//                    case 'tehnicheskoe_obsluzhivanie';
//                    case 'remont_transmissii';
//                    case 'remont_dvigatelia';
//                    case 'remont_elektrooborudovaniia';
//                    case 'remont_rulevogo_upravleniia';
//                    case 'moika_himchistka_polirovka_avtomobilia';
//                    case 'remont_kondicionera';
//                    case 'remont_sistemy_ohlazhdeniia';
//                    case 'shinomontazh';
//                    case 'zapchasti';
//                    case 'diagnostika_avtomobilia';
//                    case 'remont_akpp';
//                    case 'kuzovnoi_remont';
//                    case 'remont_hodovoi_chasti_podveski_avtomobilia';
//                    case 'remont_tormoznoi_sistemy';
//                    case 'pokraska_avtomobilia';
//                    case 'remont_toplivnoi__sistemy';
//                    case 'remont_vyhlopnoi__sistemy';
//                    case 'argonnaia_svarka';
//                        break;
//                    default:
//                        throw new \yii\web\NotFoundHttpException('Страница не найдена!');
//                }
//            }
//        }
//
//        if(is_null($service)) {
//            //TODO: Search service from individual services table whene will it
//        } else {
//            $service->setSeoData($this->brand, $this->model);
//        }
//        $this->getLastModified($service->update_at);
//        Yii::$app->seo->setData($service);
//
//        if(Subdomains::getStatusBrand($this->brand->url) == true){
//            $url= "http://".$this->brand->url_subdomain."/".$this->model->url."/".$service->url;
//            return Yii::$app->response->redirect($url, 301);
//        }
//
//        return $this->render('service', [
//            'brand' => $this->brand,
//            'model' => $this->model,
//            'service' => $service,
//            'comTransport' => $com_transport,
//        ]);
//    }
//
//    public function actionServiceSubdomain()
//    {
//        $state = false;
//        $brand = Subdomains::getBrand();
//        $this->brand = Brands::find()->where(['url' => $brand])->one();
//        $this->model = Models::find()->where(['brand_id' => $this->brand->id, 'url' => $this->route[0]])->one();
//
//        $model_id = 0;
//        if(!empty($this->model->id))
//            $model_id = $this->model->id;
//        $service = CommonServicesContent::find()->where([
//            'url' => $this->route[1],
//            'model_id' => $model_id
//        ])->one();
//        if(empty($service)){
//            $service = CommonServices::find()->where([
//                'url' => $this->route[1]
//            ])->one();
//        }
//
//        $com_transport = false;
//        if(array_key_exists($this->brand->url, $this->exceptional_models)){
//            if(in_array($this->model->url, $this->exceptional_models[$this->brand->url])) {
//                if($service->url != 'moika_himchistka_polirovka_avtomobilia') {
//                    $this->layout = '@app/views/layouts/main2';
//                    $com_transport = true;
//                }
//            }
//        }
//
//        // заглушка спецаильно для этих моделей
//        if(!empty($this->route[1])){
//            if($this->model->hide_url_price_list == 1){
//                switch ($this->route[1]){
//                    case 'tehnicheskoe_obsluzhivanie';
//                    case 'remont_transmissii';
//                    case 'remont_dvigatelia';
//                    case 'remont_elektrooborudovaniia';
//                    case 'remont_rulevogo_upravleniia';
//                    case 'moika_himchistka_polirovka_avtomobilia';
//                    case 'remont_kondicionera';
//                    case 'remont_sistemy_ohlazhdeniia';
//                    case 'shinomontazh';
//                    case 'zapchasti';
//                    case 'diagnostika_avtomobilia';
//                    case 'remont_akpp';
//                    case 'kuzovnoi_remont';
//                    case 'remont_hodovoi_chasti_podveski_avtomobilia';
//                    case 'remont_tormoznoi_sistemy';
//                    case 'pokraska_avtomobilia';
//                    case 'remont_toplivnoi__sistemy';
//                    case 'remont_vyhlopnoi__sistemy';
//                    case 'argonnaia_svarka';
//                        break;
//                    default:
//                        throw new \yii\web\NotFoundHttpException('Страница не найдена!');
//                }
//            }
//        }
//
//        //Проверка поддомена мерседес
//        $host = $_SERVER['HTTP_HOST'];
//        if (str_contains($host, 'mercedes-benz') == true){
//            error_log("Hello i am hear " . $this->route[1]);
//            if(!empty($this->route[1])){
//
//                    switch ( $this->route[1]){
//                        case 'sniatieustanovka_kolesa_R13';
//                        case 'sniatieustanovka_kolesa_R14';
//                        case 'sniatieustanovka_kolesa_R15';
//                        case 'sniatieustanovka_kolesa_R16';
//                        case 'sniatieustanovka_kolesa_R17';
//                        case 'sniatieustanovka_kolesa_R18';
//                        case 'sniatieustanovka_kolesa_R19';
//                        case 'sniatieustanovka_kolesa_R20';
//                        case 'sniatieustanovka_kolesa_4x4_i_mikroavtobusa';
//                        case 'razborkasborka_kolesa_R20_4x4_i_mikroavtobusa';
//                        case 'balansirovka_kolesa_R13';
//                        case 'balansirovka_kolesa_R14';
//                        case 'balansirovka_kolesa_R15';
//                        case 'balansirovka_kolesa_R16';
//                        case 'balansirovka_kolesa_R17';
//                        case 'balansirovka_kolesa_R18';
//                        case 'balansirovka_kolesa_R19';
//                        case 'balansirovka_kolesa_R20';
//                        case 'balansirovka_kolesa_4x4_i_mikroavtobusa';
//                        case 'kompleks_rabot_na_4_kolesa_R13';
//                        case 'kompleks_rabot_na_4_kolesa_R14';
//                        case 'kompleks_rabot_na_4_kolesa_R15';
//                        case 'kompleks_rabot_na_4_kolesa_R16';
//                        case 'kompleks_rabot_na_4_kolesa_R17';
//                        case 'kompleks_rabot_na_4_kolesa_R18';
//                        case 'kompleks_rabot_na_4_kolesa_R19';
//                        case 'kompleks_rabot_na_4_kolesa_R20';
//                        case 'kompleks_rabot_na_4_kolesa_4x4_i_mikroavtobusa';
//                        case 'ochistka_borta_diska_i_germetizaciia';
//                        case 'gruzy_dlia_balansirovki_odnogo_kolesa';
//                        case 'gruzy_dlia_balansirovki_chetyreh_koles';
//                        case 'remont_odnogo_kolesa_zhgutom';
//
//                            $url= "http://".$this->brand->url_subdomain."/shinomontazh";
//                            //$url= "https://nelset.com";
//                            return Yii::$app->response->redirect($url, 301);
//
//                        case 'zamena_zadnih_tormoznyh_kolodok_barabany';
//
//                            $url= "http://".$this->brand->url_subdomain."/zamena_zadnih_tormoznyh_kolodok_diskovye";
//                            return Yii::$app->response->redirect($url, 301);
//                        default:
//                            throw new \yii\web\NotFoundHttpException('Страница не найдена!');
//                    }
//
//            }
//
//            $state = $this->checkSeoProperty($this->model->seo_priority, $service->seo_priority);
//
//        } else {
//            $state = true;
//        }
//
//
//
//        if($state == true){
//            if(is_null($service)) {
//                //TODO: Search service from individual services table whene will it
//            } else {
//                $service->setSeoData($this->brand, $this->model);
//            }
//            $this->getLastModified($service->update_at);
//            Yii::$app->seo->setData($service);
//            return $this->render('service', [
//                'brand' => $this->brand,
//                'model' => $this->model,
//                'service' => $service,
//                'comTransport' => $com_transport,
//            ]);
//        }else {
//            throw new \yii\web\NotFoundHttpException('Страница не найдена!');
//        }
//
//
//
//
//        //if($service->seo)
//        //error_log($service->seo_priority . " Priority SEO Service");
//
//
//
//
//    }
//
//    public function checkSeoProperty($model, $service){
//        $state = false;
//        if($model == 4){
//            switch ($service){
//                case 0;
//                case 1;
//                case 2;
//                case 3;
//                case 4;
//                    $state = true;
//                    break;
//                default:
//                    $state = false;
//            }
//        } elseif($model == 3){
//            switch ($service){
//                case 1;
//                case 2;
//                case 3;
//                case 4;
//                    $state = true;
//                    break;
//                default:
//                    $state = false;
//            }
//        } elseif($model == 2){
//            switch ($service){
//                case 2;
//                case 3;
//                case 4;
//                    $state = true;
//                    break;
//                default:
//                    $state = false;
//            }
//        } elseif($model == 1){
//            switch ($service){
//                case 3;
//                case 4;
//                    $state = true;
//                    break;
//                default:
//                    $state = false;
//            }
//        }elseif($model == 0){
//            switch ($service){
//                case 4;
//                    $state = true;
//                    break;
//                default:
//                    $state = false;
//            }
//        }
//
//
//        return $state;
//
//    }
}
