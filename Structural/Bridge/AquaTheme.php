<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:25
 */

namespace Structural\Bridge;

include_once 'Theme.php';

class AquaTheme implements Theme
{
    public function getColor()
    {
        return 'Light blue';
    }
}