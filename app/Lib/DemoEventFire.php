<?php

namespace App\Lib;

use App\Events\DemoEvent;
use Illuminate\Support\Facades\Event;

class DemoEventFire
{
    public function eventFire()
    {
        $event = new DemoEvent();
        event($event);

        return $event->isFired();
    }
}