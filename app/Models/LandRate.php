<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LandRate extends Model
{
    use HasFactory;
    protected $guarded=[];
    /**
     * Get the land that owns the LandRate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function land(): BelongsTo
    {
        return $this->belongsTo(Land::class, 'land_id', 'id');
    }
    /**
     * Get the verified_by that owns the LandRate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function verified_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by', 'id');
    }
}
