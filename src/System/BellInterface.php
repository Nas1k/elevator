<?php

namespace Vendor\Elevator\System;

interface BellInterface
{
    public function notify($from, $to);
}
