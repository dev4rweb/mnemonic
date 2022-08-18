<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $response->dumpHeaders();

        $response->dumpSession();

        $response->dump();
//        $response = $this->get('/about');
//        $response = $this->get('/contacts');

        $response->assertStatus(200);
    }
}
