<?php

namespace Tests\Feature\Appointment;

use App\Models\User;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AppointmentCreationTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_can_make_an_appointment()
    {
        $user = User::factory()->create();
        $studio = $user->studios()->create();
        $artist = User::factory()->create();
        $startTime = Carbon::tomorrow();

		$appointment = [
			'start' => $startTime,
			'end' => $startTime->addHour(),
			'studio_id' => $studio->id,
			'artist_id' => $artist->id,
		];

        $response = $this
            ->actingAs($user)
            ->post('api/users/' . $user->id . '/appointments', $appointment);

        $response->assertStatus(201);
		$this->assertDatabaseHas('appointments', $appointment);


		$lastAppointment = Appointment::latest()->first();

		$this->assertEquals($appointment['start'], $lastAppointment->start);
		$this->assertEquals($appointment['end'], $lastAppointment->end);
		$this->assertEquals($appointment['studio_id'], $lastAppointment->studio_id);
		$this->assertEquals($appointment['artist_id'], $lastAppointment->artist_id);
    }
}
