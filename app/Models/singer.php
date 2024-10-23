<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singer extends Model
{
    use HasFactory;

    public function album()
    {
        return $this->hasMany(Album::class);
    }
    public function song()
    {
        return $this->hasMany(Song::class);
    }
}
