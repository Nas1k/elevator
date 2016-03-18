<?php

namespace Vendor\Elevator\System;

interface CabinInterface
{
    public function moveToFloor($floor);

    public function isAvailable();
}
