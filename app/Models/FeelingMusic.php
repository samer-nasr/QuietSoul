<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeelingMusic extends Model
{
    use HasFactory;

    public function music()
    {
        return $this->belongsTo(Music::class);
    }
}
