<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnnouncementsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRenderPagesTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        // $response = $this->get('/announcements');
        // $response->assertStatus(200);

        $response = $this->get('/announcements/create');
        $response->assertStatus(200);

        // $response = $this->get('/announcements/' . factory(\App\Announcements::class) . '/edit');
        // $response->assertStatus(200);
    }
}
