<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:52
 */

namespace Structural\Decorator;

include_once 'Coffee.php';

class VanillaCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 3;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', vanilla';
    }
}