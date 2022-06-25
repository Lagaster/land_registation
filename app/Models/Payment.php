<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get the user that owns the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'paid_by', 'id');
    }
    public function paidTo()
    {
        return $this->belongsTo(User::class, 'paid_by', 'id');
    }
    /**
     * Get the land that owns the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function land()
    {
        return $this->belongsTo(Land::class, 'land_id', 'id');
    }


}
