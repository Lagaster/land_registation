<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LandUser extends Model

{
    use HasFactory;
    protected $table = "land_user";
    protected $guarded=[];

    protected $casts = [
        'start' => "datetime:d-m-Y",
    ];
    /**
     * Get the owner that owns the LandUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    /**
     * Get the land that owns the LandUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function land()
    {
        return $this->belongsTo(Land::class, 'land_id', 'id');
    }


}
