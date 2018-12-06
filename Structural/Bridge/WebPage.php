<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:21
 */
namespace Structural\Bridge;

include_once 'Theme.php';

interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}