<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = [
        'vision_id',
        'mission',
    ];

    public function vision() {
        return $this->belongsTo(Vision::class);
    }
}
