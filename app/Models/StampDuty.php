<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StampDuty extends Model
{
    use HasFactory;
    protected $guarded=[];
    /**
     * Get the user that owns the StampDuty
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function verified_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by', 'id');
    }
}
