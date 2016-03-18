<?php

namespace Vendor\Elevator\System;

use Vendor\Elevator\Logger;

class Cabin implements CabinInterface
{
    use Logger;

    protected $floor;

    protected $denied = false;

    protected $door;

    protected $currentFloor = 1;

    protected $passenger;

    protected $bell;

    public function __construct(
        DoorInterface $door,
        BellInterface $bell
    ) {
        $this->door = $door;
        $this->bell = $bell;
    }

    public function isAvailable()
    {
        $this->log("Check if cabin available (is not moving): " . !$this->denied && !$this->door->isOpen());
        return !$this->denied && !$this->door->isOpen();
    }

    public function moveToFloor($floor)
    {
        $this->log("Start moving to floor:" . $floor);
        $this->door->close();
        $this->denied = true;
        $this->bell->notify($this->currentFloor, $floor);
        $this->denied = false;
        $this->currentFloor = $floor;
        $this->door->open();
    }
}
