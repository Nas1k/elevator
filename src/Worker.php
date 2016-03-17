<?php

namespace Vendor\Elevator;

use Vendor\Elevator\System\CabinInterface;

class Worker implements WorkerInterface
{
    use Logger;

    protected $queue;

    protected $cabin;

    public function __construct(
        QueueInterface $queue,
        CabinInterface $cabin
    ) {
        $this->cabin = $cabin;
        $this->queue = $queue;
    }

    public function run()
    {
        $this->log("run available tasks by worker");
        if ($this->cabin->isAvailable()) {
            foreach ($this->queue->get() as $task) {
                $this->cabin->moveToFlor($task->getFlor());
            }
        }
    }
}