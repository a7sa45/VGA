<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'graph',
        'user_id',
        'tutorial_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tutorial()
    {
        return $this->belongsTo(Tutorial::class);
    }
}
