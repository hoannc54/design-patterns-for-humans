<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:15
 */
namespace Structural\Adapter;

include_once 'Lion.php';
include_once 'WildDog.php';


class WildDogAdapter implements Lion
{

    protected $dog;

    public function __construct(WildDog $dog)
    {
        $this->dog = $dog;
    }

    public function roar()
    {
        return $this->dog->bark();
    }
}