<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:24
 */

namespace Structural\Bridge;

include_once 'Theme.php';
include_once 'WebPage.php';

class Careers implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "Careers page in " . $this->theme->getColor();
    }
}