<?php

namespace Vendor\Elevator\System;

use Vendor\Elevator\Logger;

class Cabin implements CabinInterface
{
    use Logger;

    protected $flor;

    protected $denied = false;

    protected $door;

    protected $currentFlor = 1;

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

    public function moveToFlor($flor)
    {
        $this->log("Start moving to flor:" . $flor);
        $this->door->close();
        $this->denied = true;
        $this->bell->notify($this->currentFlor, $flor);
        $this->denied = false;
        $this->currentFlor = $flor;
        $this->door->open();
    }
}
