<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductNote extends Model
{
    use HasFactory;
	protected $guarded = ['id', 'created_at', 'updated_at'];

	public function createdBy (): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
