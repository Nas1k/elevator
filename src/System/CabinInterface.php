<?php

namespace Vendor\Elevator\System;

interface CabinInterface
{
    public function moveToFlor($flor);

    public function isAvailable();
}
