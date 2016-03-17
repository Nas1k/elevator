<?php

namespace Vendor\Elevator;

class TaskFactory
{
    use Logger;

    public function create($number)
    {
        $this->log("create task");
        return new Task($number);
    }
}
