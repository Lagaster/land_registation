<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Carbon;

class LandUser extends Model

{
    protected $table = "land_user";
    protected $guarded=[];

    protected $casts = [
        'start' => "datetime:d-m-Y",
    ];


}
