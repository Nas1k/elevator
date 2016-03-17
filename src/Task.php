<?php

namespace Vendor\Elevator;

class Task implements TaskInterface
{
    use Logger;

    protected $flor;

    public function __construct($number)
    {
        $this->log("set flor to task with number " . $number);
        $this->flor = $number;
    }

    public function getFlor()
    {
        $this->log("get flor form task " . $this->flor);
        return $this->flor;
    }
}
