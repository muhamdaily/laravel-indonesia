<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostalCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'subdistrict_id',
        'code',
    ];

    public function village(): BelongsTo
    {
        return $this->belongsTo(Subdistrict::class);
    }
}
