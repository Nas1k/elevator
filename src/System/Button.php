<?php

namespace Vendor\Elevator\System;

use Vendor\Elevator\Logger;
use Vendor\Elevator\QueueInterface;
use Vendor\Elevator\TaskFactory;

class Button implements ButtonInterface
{
    use Logger;

    protected $queue;

    protected $taskFactory;

    public function __construct(
        TaskFactory $taskFactory,
        QueueInterface $queue
    ) {
        $this->queue = $queue;
        $this->taskFactory = $taskFactory;
    }

    public function press($flor)
    {
        $this->log("Press button: " . $flor);
        $this->queue->add($this->taskFactory->create($flor));
    }
}
