<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subdistrict extends Model
{
    use HasFactory;

    protected $fillabel = [
        'district_id',
        'name'
    ];

    public function state(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
