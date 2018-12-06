<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:14
 */

namespace Structural\Adapter;

include_once 'Lion.php';

class Hunter
{
    public function hunt(Lion $lion)
    {
        return $lion->roar();
    }
}