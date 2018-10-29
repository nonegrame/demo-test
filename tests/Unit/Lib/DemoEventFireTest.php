<?php

namespace Tests\Unit\Lib;

use App\Events\DemoEvent;
use App\Lib\DemoEventFire;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class DemoEventFireTest extends TestCase
{
    public function test_eventFire()
    {
        // arrange
        $this->expectsEvents(DemoEvent::class);

        $demoEventFire = $this->app->make(DemoEventFire::class);

        // act
        $result = $demoEventFire->eventFire();

        // assert
    }

    public function test_eventFire_2()
    {
        // arrange
        $hasFired  = false;
        Event::listen(DemoEvent::class, function(DemoEvent $event) use(&$hasFired) {
            $hasFired = true;
            $event->setFired(true);
        });

        $demoEventFire = $this->app->make(DemoEventFire::class);

        // act
        $result = $demoEventFire->eventFire();

        // assert
        $this->assertTrue($hasFired);
        $this->assertTrue($result);
    }
}