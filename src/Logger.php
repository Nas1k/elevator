<?php

namespace Vendor\Elevator;

trait Logger
{
    public function log($msg)
    {
        echo $msg . PHP_EOL;
    }
}
