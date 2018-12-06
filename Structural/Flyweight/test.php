<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:58
 */
include_once 'TeaMaker.php';
include_once 'TeaShop.php';

$teaMaker = new \Structural\Flyweight\TeaMaker();
$shop = new \Structural\Flyweight\TeaShop($teaMaker);

$shop->takeOrder('less sugar', 1);
$shop->takeOrder('more milk', 2);
$shop->takeOrder('without sugar', 5);

$shop->serve();