<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 12/6/18
 * Time: 08:00
 */

namespace Structural\Proxy;

include_once 'Door.php';

class SecuredDoor
{
    protected $door;

    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function open($password)
    {
        if ($this->authenticate($password)) {
            $this->door->open();
        } else {
            echo "Big no! It ain't possible.";
        }
    }

    public function authenticate($password)
    {
        return $password === '$ecr@t';
    }

    public function close()
    {
        $this->door->close();
    }
}