<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:15
 */
include_once 'WildDog.php';
include_once  'WildDogAdapter.php';
include_once 'Hunter.php';

$wildDog = new \Structural\Adapter\WildDog();
$wildDogAdapter = new \Structural\Adapter\WildDogAdapter($wildDog);

$hunter = new \Structural\Adapter\Hunter();
echo $hunter->hunt($wildDogAdapter);