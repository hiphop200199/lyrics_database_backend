<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class track extends Model
{
    use HasFactory;

    public function albums()
    {
        return $this->belongsTo(Album::class);
    }
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
