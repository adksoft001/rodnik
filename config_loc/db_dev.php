<?php

/* 
 * 19.11.2020
 * File: db.php
 * Encoding: UTF-8
 * Project: RMS spetial for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */
/*
// VDS production domain
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=rms_prod',
    'username' => 'rms_prod',
    'password' => '0X2j6C4t',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
*/
// Beget production domain
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=webmasgt_rms',
    'username' => 'root',
    'password' => 'rootpass',
    'charset' => 'utf8',


    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];