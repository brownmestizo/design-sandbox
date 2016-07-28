<?php

namespace MB\Shipping;


use MB\Cart\Cart;

class Shipping
{
    public $zone;
    public $economy;
    public $priority;
    private $priorityInfo;
    private $economyInfo;

    public function __construct($countryId)
    {
        $country = \TblShippingCountriesQuery::create()->findOneByCtyId($countryId);
        $zone = $country->getZoneId();
        $this->zone = \TblShippingZonesQuery::create()->findOneByZoneId($zone)->getZoneName();

        $this->economy = $country->getCtyEconomy() == 'Yes';
        $this->priority = $country->getCtyPriority() == 'Yes';
        $this->fillEconomyInfo();
        $this->fillPriorityInfo();
    }

    public function getPriorityPrice(Cart $cart)
    {
        if (!$this->priority) {
            return null;
        }

        $items = $cart->getItems();
        $price = 0;
        foreach ($items as $item) {
            $weightPriority = $item->getProduct()->getWeightPriority();
            $price += $this->priorityInfo[$weightPriority] * $item->getQuantity();
        }

        return $price;
    }

    public function getEconomyPrice(Cart $cart)
    {
        if (!$this->economy) {
            return null;
        }

        $items = $cart->getItems();
        $price = 0;

        foreach ($items as $item) {
            $weightEconomy = $item->getProduct()->getWeightEconomy();
            $price += $this->economyInfo[$weightEconomy] * $item->getQuantity();
        }

        return $price;
    }


    public function getProductPrices(Cart $cart)
    {
        $items = $cart->getItems();
        $res = [];
        foreach ($items as $item) {
            $info = ['p' => null, 'e' => null];
            if ($this->economy) {
                $weightEconomy = $item->getProduct()->getWeightEconomy();
                $info['e'] = $this->economyInfo[$weightEconomy] * $item->getQuantity();
            }
            if ($this->priority) {
                $weightPriority = $item->getProduct()->getWeightPriority();
                $info['p'] = $this->priorityInfo[$weightPriority] * $item->getQuantity();
            }
            $res[$item->getId()] = $info;
        }

        return $res;
    }

    private function fillEconomyInfo()
    {
        if (!$this->economy) {
            return null;
        }
        $info = \TblShippingEconomyQuery::create()->select(['weight_ide', $this->zone])->find()->toArray();
        $this->economyInfo = array_reduce($info, function ($r, $v) {
            $r[$v['weight_ide']] = $v[$this->zone];

            return $r;
        }, []);
    }

    private function fillPriorityInfo()
    {
        if (!$this->priority) {
            return null;
        }
        $info = \TblShippingPriorityQuery::create()->select(['weight_idp', $this->zone])->find()->toArray();
        $this->priorityInfo = array_reduce($info, function ($r, $v) {
            $r[$v['weight_idp']] = $v[$this->zone];

            return $r;
        }, []);
    }

}