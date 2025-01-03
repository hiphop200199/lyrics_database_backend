<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singer extends Model
{
    use HasFactory;

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
