<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentParticipant extends Model
{
    use HasFactory;

	protected $guarded = ['id', 'created_at', 'updated_at'];

	public function appointment (): BelongsTo
	{
		return $this->belongsTo(Appointment::class);
	}

	public function participant (): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
