<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;

    public function singer()
    {
        return $this->belongsTo(Singer::class);
    }
    public function track()
    {
        return $this->hasOne(Track::class);
    }
}
