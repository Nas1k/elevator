<?php

namespace Vendor\Elevator\System;

interface DoorInterface
{
    public function open();

    public function close();

    public function isOpen();
}
