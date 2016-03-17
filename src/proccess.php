<?php

require __DIR__ . "/../vendor/autoload.php";

$q = new \Vendor\Elevator\Queue();
$cabin = new \Vendor\Elevator\System\Cabin(new \Vendor\Elevator\System\Door(), new \Vendor\Elevator\System\Bell());

$button = new \Vendor\Elevator\System\Button(new \Vendor\Elevator\TaskFactory(), $q);
$button->press(5);
$button->press(3);
$button->press(22);

(new \Vendor\Elevator\Worker($q, $cabin))->run();
