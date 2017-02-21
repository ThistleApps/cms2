<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        Artisan::call('db:seed');
    }

    public function testHomepage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $this->assertContains('Quantum', $response->content());
    }

    public function testWelcome()
    {
        $response = $this->get('/welcome');

        $response->assertStatus(200);
        $this->assertContains('Featured Page', $response->content());
    }
}
