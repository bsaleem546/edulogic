<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_activities extends Model
{
    use HasFactory;

    public function activities()
    {
        return $this->belongsTo(Activities::class,'activity_id');
    }
}
