<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:26
 */

include_once 'DarkTheme.php';
include_once 'About.php';
include_once 'Careers.php';

$darkTheme = new \Structural\Bridge\DarkTheme();

$about = new \Structural\Bridge\About($darkTheme);
$careers = new \Structural\Bridge\Careers($darkTheme);

echo $about->getContent(); // "About page in Dark Black";
echo $careers->getContent(); // "Careers page in Dark Black";