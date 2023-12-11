<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class District extends Model
{
    use HasFactory;

    protected $fillabel = [
        'province_id',
        'name'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
}
