<?php

namespace Vendor\Elevator\System;

class Bell implements BellInterface
{
    public function notify($from, $to)
    {
        while ($from !== $to) {
            if ($to > $from) {
                echo "Flor " . ++$from . PHP_EOL;
            } else {
                echo "Flor " . $from-- . PHP_EOL;
            }
        }
    }
}
