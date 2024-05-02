<?php

/*
 * 2021 Jan 31
 * File: SeoTextBlock.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\blocks\SeoText;

use app\blocks\Block;

/**
 * Description of SeoTextBlock
 *
 * @author Александр
 */
class SeoTextBlock extends Block {

    public $header;
    public $text;

    public function run() {
        return $this->render([
            'header' => $this->header,
            'text' => $this->str_insert($this->text, "</p>", '<div class="seo-skrcont">') . '</div>'
        ]);
    }

    protected function str_insert($str, $search, $insert) {
        $index = strpos($str, $search);
        if ($index === false) {
            return $str;
        }
        return substr_replace($str, $search . $insert, $index, strlen($search));
    }

}
