<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    use HasFactory;
    public function singers()
    {
        return $this->belongsTo(Singer::class);
    }
    public function tracks()
    {
        return $this->belongsToMany(Track::class);
    }
}
