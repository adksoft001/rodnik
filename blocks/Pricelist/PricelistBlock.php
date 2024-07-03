<?php

/*
 * 02.12.2020
 * File: PricelistBlock.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\blocks\Pricelist;

use app\blocks\Block;
use app\models\Pricelist;

/**
 * Description of PricelistBlock
 *
 * @author Александр
 */
class PricelistBlock extends Block
{
    /**
     * @var app\models\Pricelist;
     */
    protected $pricelist;
    protected $groupId;
    protected $priceId;

    public $brand;
    public $model;
    public $service;
    public $subdomain;
    public $h1;
    public $hprice;

    protected $header = 'Прайс-лист';
    protected $headerPostfix = ' цена:';

    public function init()
    {
        parent::init();
        $priceListQuery = Pricelist::find();
        if (is_null($this->brand)) {
            $priceListQuery->with(['indepservice']);
        }
        if (!is_null($this->model)) {
            $this->header = $this->model->header . $this->headerPostfix;
        }
        if (!is_null($this->service)) {
            $this->header = $this->service->header . $this->headerPostfix;
            $this->groupId = $this->service->price_group_id;
            $this->priceId = $this->service->price_id;
        }
        if (!is_null($this->groupId)) {
            $priceListQuery->where(['OR', ['id' => $this->groupId], ['parent_id' => $this->groupId]]);
        }
        $this->pricelist = $priceListQuery->all();
        $this->preparePriceData();
    }

    protected function preparePriceData()
    {
        $pricelist = [];
        foreach ($this->pricelist as $price) {
            $price->href = $price->indepservice ? '/' . $price->indepservice->url . '/' : null;
            if (is_null($price->parent_id)) {
                $pricelist[$price->id] = $price;
            }
        }
        foreach ($this->pricelist as $price) {
            $first = false;
            if (!is_null($price->parent_id)) {
                if (!is_null($this->priceId) and $this->priceId == $price->id) {
                    $first = true;
                }
                $pricelist[$price->parent_id]->isertChild($price, $first);
            }
        }

        if ($this->brand) {
            foreach ($this->pricelist as $price) {
                $price->href = $price->indepservice ? '/' . $this->brand->url . '/' . $price->indepservice->url . '/' : null;
                if (is_null($price->parent_id)) {
                    $pricelist[$price->id] = $price;
                }
            }
        }

        if ($this->model) {
            foreach ($this->pricelist as $price) {
                $price->href = $price->indepservice ? '/' . $this->brand->url . '/' .$this->model->url.'/'. $price->indepservice->url . '/' : null;
                if (is_null($price->parent_id)) {
                    $pricelist[$price->id] = $price;
                }
            }
        }

        $this->pricelist = $pricelist;
    }

    protected function getPriceGroup($group, $items, $iter)
    {
        ob_start();
        include __DIR__ . '/views/group.php';
        return ob_get_clean();
    }

    protected function generatePriceItems($priceChildren)
    {
        $items = '';
        foreach ($priceChildren as $item) {
            $items .= $this->getItem($item);
        }
        return $items;
    }

    protected function generatePriceGroups()
    {
        $groups = '';
        $iter = 0;
        foreach ($this->pricelist as $group) {
            $iter++;
            $items = $this->generatePriceItems($group->children);
            $groups .= $this->getPriceGroup($group, $items, $iter);
        }
        return $groups;
    }

    public function run()
    {
        if (!empty($this->hprice)) {
            $this->header = $this->hprice;
        }

        return $this->render([
            'header' => $this->header,
            'groups' => $this->generatePriceGroups(),
            'h1' => isset($this->h1) ? $this->h1 : null,
        ]);
    }


}
