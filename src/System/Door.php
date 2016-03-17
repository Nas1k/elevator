<?php

namespace Vendor\Elevator\System;

use Vendor\Elevator\Logger;

class Door implements DoorInterface
{
    use Logger;

    protected $opened;

    public function open()
    {
        $this->log("door open");
        $this->opened = true;
    }

    public function close()
    {
        $this->log("door close");
        $this->opened = false;
    }

    public function isOpen()
    {
        $this->log("check if door is opening");
        return $this->opened;
    }
}
