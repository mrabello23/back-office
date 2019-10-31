<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class AnnouncementsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRenderPages()
    {
        $response = $this->get('/');
        $response->assertSuccessful();

        $user = factory(\App\User::class)->create();

        $response = $this->actingAs($user)->get(route('announcements.index'));
        $response->assertSuccessful();

        $response = $this->actingAs($user)->get(route('announcements.create'));
        $response->assertSuccessful();

        $announcements = factory(\App\Announcements::class)->create();
        $response = $this->actingAs($user)->get(route('announcements.edit', $announcements));
        $response->assertSuccessful();
    }

    public function testSaveAnnouncements()
    {
        $data = [
            'title' => 'App test',
            'comments' => 'App comments',
            'start_date' => date('Y-m-d'),
            'expiration_date' => date('Y-m-d', strtotime('+1 day')),
            'active' => true,
        ];

        $user = factory(\App\User::class)->create();

        $this->actingAs($user)->postJson(route('announcements.save'), $data);
        $this->assertDatabaseHas('announcements', [
            'title' => 'App test',
            'comments' => 'App comments'
        ]);
    }

    public function testUpdateAnnouncements()
    {
        $announcements = factory(\App\Announcements::class)->create();

        $data = [
            'title' => 'App test11',
            'comments' => 'App comments11',
            'start_date' => date('Y-m-d'),
            'expiration_date' => date('Y-m-d', strtotime('+1 day')),
        ];

        $user = factory(\App\User::class)->create();

        $this->actingAs($user)->putJson(route('announcements.update', $announcements), $data);
        $this->assertDatabaseHas('announcements', [
            'title' => 'App test11',
            'comments' => 'App comments11'
        ]);
    }

    public function testRemoveAnnouncements()
    {
        $announcements = factory(\App\Announcements::class)->create([
            'title' => 'App test22',
            'comments' => 'App comments22'
        ]);

        $user = factory(\App\User::class)->create();

        $this->actingAs($user)->deleteJson(route('announcements.update', $announcements));
        $this->assertDatabaseHas('announcements', [
            'title' => 'App test22',
            'comments' => 'App comments22',
            'active' => false
        ]);
    }
}
