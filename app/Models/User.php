<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];
    protected $guarded=[];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The lands that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function lands(): BelongsToMany
    {
        return $this->belongsToMany(Land::class, 'land_user', 'user_id', 'land_id');
    }
    public function land_rates_verified(){
        return $this->hasMany(LandRate::class,"verified_by","id");
    }
    public function valuation_reports_verified(){
        return $this->hasMany(LandRate::class,"verified_by","id");
    }
    /**
     * Get all of the stamp_duties for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stamp_duties(): HasMany
    {
        return $this->hasMany(StampDuty::class, 'user_id', 'id');
    }
    public function stamp_duties_verified(){
        return $this->hasMany(LandRate::class,"verified_by","id");
    }

    /**
     * Get all of the payments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments_paid(): HasMany
    {
        return $this->hasMany(Payment::class, 'paid_by', 'id');
    }

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments_received(): HasMany
    {
        return $this->hasMany(Payment::class, 'Paid_to', 'id');
    }

}
