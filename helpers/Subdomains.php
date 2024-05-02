<?php

/*
 * 2021 Mar 6
 * File: Specsymbols.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 *
 * Author: Gafuroff Alexandr
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\helpers;

/**
 * Helpers for subdomains
 * @author  nelset.com team
 */
class Subdomains {

    public static function getBrand(){
        $host = $_SERVER['HTTP_HOST'];
        $host = str_replace("servis-", "", $host);
        $host = str_replace("remont-", "", $host);
        $host = strtolower($host);
        $pieces = explode(".", $host);
        $brand = $pieces[0];
        return $brand;
    }

    public static function getStatus(){
        $host = $_SERVER['HTTP_HOST'];
        if (str_contains($host, 'servis-') == true || str_contains($host, 'remont-') == true ){
            return true;
        } else {
            return false;
        }
    }

    public static function getStatusBrand($brand){

//        ..if(strtolower($brand) == 'bmw' || strtolower($brand) == 'volkswagen' || strtolower($brand) == 'mercedes-benz' ){
            return true;
//        } else {
//            return false;
//        }

    }


}
