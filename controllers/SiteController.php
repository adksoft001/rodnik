<?php

/*
 * 26.11.2020
 * File: SiteController.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\controllers;

use Yii;
use yii\filters\{AccessControl, VerbFilter};
use yii\web\Response;
use app\models\{LoginForm, ContactForm, IndependensServices};
use app\controllers\AppBaseController;

class SiteController extends AppBaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->initCurrentPageData();
        $this->getLastModified();
        Yii::$app->seo->setData($this->currentPage);
        
        return $this->render('index');
    }

    public function actionPrice()
    {
        $this->initCurrentPageData();
        $this->getLastModified();
        Yii::$app->seo->setData($this->currentPage);
        return $this->render('price');
    }

    /**
     * Displays agreement page.
     *
     * @return string
     */
    public function actionAgreement()
    {
        $this->initCurrentPageData();
        $this->getLastModified();
        Yii::$app->seo->setData($this->currentPage);
        return $this->render('agreement');
    }

    /**
     * Displays tehosmotr page.
     *
     * @return string
     */
    public function actionTehosmotr()
    {
        $this->initCurrentPageData();
        $this->getLastModified();
//        Yii::$app->seo->setData($this->currentPage);
        Yii::setAlias('@tehosmotr', 'tehosmotr');

        return $this->render('tehosmotr');
    }
    
//    /**
//     * Login action.
//     *
//     * @return Response|string
//     */
//    public function actionLogin()
//    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        }
//
//        $model->password = '';
//        return $this->render('login', [
//            'model' => $model,
//        ]);
//    }

//    /**
//     * Logout action.
//     *
//     * @return Response
//     */
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }

//    /**
//     * Displays contact page.
//     *
//     * @return Response|string
//     */
//    public function actionContacts()
//    {
//        $this->initCurrentPageData();
//        $this->getLastModified();
//        Yii::$app->seo->setData($this->currentPage);
//
//        /*$model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
//            Yii::$app->session->setFlash('contactFormSubmitted');
//
//            return $this->refresh();
//        }*/
//        return $this->render('contact', [
//            //'model' => $model,
//        ]);
//    }

//    /**
//     * Displays about page.
//     *
//     * @return string
//     */
//    public function actionCompany()
//    {
//        $this->initCurrentPageData();
//        $this->getLastModified();
//        Yii::$app->seo->setData($this->currentPage);
//        return $this->render('about');
//    }
    
//    /**
//     * Displays pricelist page.
//     *
//     * @return string
//     */
//    public function actionPricelist()
//    {
//        $this->initCurrentPageData();
//        $this->getLastModified();
//        Yii::$app->seo->setData($this->currentPage);
//        return $this->render('pricelist');
//    }
}
