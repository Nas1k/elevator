<?php

namespace Vendor\Elevator;

interface QueueInterface
{
    public function add(TaskInterface $task);

    /**
     * @return TaskInterface[]
     */
    public function get();
}
