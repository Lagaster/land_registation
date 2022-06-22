<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Land extends Model
{
    use HasFactory;
    protected $guarded=[];
    /**
     * The users that belong to the Land
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'land_user',"land_id","user_id");
    }
    /**
     * Get all of the landRates for the Land
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function landRates(): HasMany
    {
        return $this->hasMany(LandRate::class, 'land_id', 'id');
    }
    /**
     * Get all of the valuation_reports for the Land
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valuation_reports(): HasMany
    {
        return $this->hasMany(ValuationReport::class);
    }
    /**
     * Get all of the stamp_duties for the Land
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stamp_duties(): HasMany
    {
        return $this->hasMany(StampDuty::class, 'land_id', 'id');
    }

    /**
     * Get all of the payments for the Land
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, 'land_id', 'id');
    }
}
