<?php

namespace Tests\Feature\Appointment;

use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppointmentCreationTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_can_make_an_appointment()
    {
        $user = User::factory()->create();
        $studio = Studio::factory()->create();
        $artist = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post('/user/' . $user->id . 'appointment', [
                'date' => Carbon::now(),
                'studio_id' => $studio->id,
                'artist_id' => $artist->id,
            ]);

        $response->assertStatus(201);
        $response->assertStatus(201);

    }
}
