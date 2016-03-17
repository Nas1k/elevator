<?php

namespace Vendor\Elevator;

// @fixme we can use spl stack object ???
class Queue implements QueueInterface
{
    use Logger;

    /**
     * @var TaskInterface[]
     */
    protected $tasks = [];

    public function add(TaskInterface $task)
    {
        $this->log("add task to queue");
        $this->tasks[] = $task;
    }

    /**
     * @return TaskInterface[]
     */
    public function get()
    {
        $this->log("get available tasks");
        return $this->tasks;
    }
}
