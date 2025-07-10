<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opponent extends Model
{
    protected $fillable = ['name', 'logo', 'stadium', 'description'];

    public function matches()
    {
        return $this->hasMany(ClubMatch::class, 'opponent_id');
    }
}