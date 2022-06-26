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


}
