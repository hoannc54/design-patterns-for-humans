<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 08:00
 */
include_once 'SecuredDoor.php';
include_once 'LabDoor.php';

$door = new \Structural\Proxy\SecuredDoor(new \Structural\Proxy\LabDoor());
$door->open('invalid'); // Big no! It ain't possible.

$door->open('$ecr@t'); // Opening lab door
$door->close(); // Closing lab door