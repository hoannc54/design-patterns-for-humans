<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 07:56
 */
include_once 'Computer.php';
include_once 'ComputerFacade.php';

$computer = new \Structural\Facade\ComputerFacade(new \Structural\Facade\Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
$computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz