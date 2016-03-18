<?php

namespace Vendor\Elevator;

class Task implements TaskInterface
{
    use Logger;

    protected $floor;

    public function __construct($number)
    {
        $this->log("set floor to task with number " . $number);
        $this->floor = $number;
    }

    public function getFloor()
    {
        $this->log("get floor form task " . $this->floor);
        return $this->floor;
    }
}
