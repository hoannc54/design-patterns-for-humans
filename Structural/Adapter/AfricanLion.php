<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:13
 */

namespace Structural\Adapter;

include_once 'Lion.php';

class AfricanLion implements Lion
{

    public function roar()
    {
        return 'african lion';
    }
}