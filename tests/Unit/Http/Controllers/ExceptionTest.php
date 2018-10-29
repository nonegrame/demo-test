<?php

namespace Tests\Unit\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExceptionTest extends TestCase
{
    use RefreshDatabase;

    public function test_fail()
    {
        $this->fail();
    }

    /**
     * @group debug
     */
    public function test_error()
    {
        // arrange

        // act
        $response = $this->get('/api/error');

        // assert
        $this->assertEquals('有錯喔', $response->getContent());

    }


}