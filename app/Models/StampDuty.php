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
    public function verifiedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by', 'id');
    }
    /**
     * Get the land that owns the StampDuty
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function land(): BelongsTo
    {
        return $this->belongsTo(Land::class, 'land_id', 'id');
    }
}
