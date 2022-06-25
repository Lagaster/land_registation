<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bind extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get the user that owns the Bind
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the land that owns the Bind
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function land()
    {
        return $this->belongsTo(Land::class);
    }

}
